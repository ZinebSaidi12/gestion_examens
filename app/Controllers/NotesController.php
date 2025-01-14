<?php
namespace App\Controllers;

use App\Models\NotesModel;

class NotesController extends BaseController
{
    public function getNotes()
    {
        // Retrieve the user ID from the session (similar to how it's done in LoginController)
        $userId = session()->get('user_id');  
        // If the user ID is not set in the session (i.e., user is not logged in)
        if (!$userId) {
            return $this->response->setJSON(['error' => 'User not logged in']);
        }

        // Retrieve the 'matiere' parameter from the URL query string
        $matiere = $this->request->getGet('matiere');
        
        // Load the NotesModel to interact with the notes data
        $notesModel = new NotesModel();

        // Fetch notes using the model and user ID
        $notes = $notesModel->getNotes($userId, $matiere);

        // Calculate the average of the notes
        $moyenneGenerale = $this->calculateAverage($notes);

        // Return the view with the fetched notes and average
        return view('notes_view', [
            'notes' => $notes,
            'moyenne_generale' => $moyenneGenerale
        ]);
    }

    private function calculateAverage($notes)
    {
        // Check if there are any notes available
        if (empty($notes)) {
            return 0;
        }

        // Calculate the total sum and count of valid notes
        $totalNotes = 0;
        $count = 0;

        foreach ($notes as $note) {
            if ($note['note'] !== null) {
                $totalNotes += $note['note'];
                $count++;
            }
        }

        // Return the average if there are any valid notes, otherwise return 0
        return $count > 0 ? $totalNotes / $count : 0;
    }
}

?>
