<?php
namespace App\Models;
use CodeIgniter\Model;

class NotesModel extends Model
{
    protected $table = 'notes';

    public function getNotes($userId, $matiere = null)
    {
        $builder = $this->db->table($this->table)
                            ->select('examens.date_examen AS date, matieres.nom AS matiere, notes.note')
                            ->join('examens', 'notes.examen_id = examens.id')
                            ->join('matieres', 'examens.matiere_id = matieres.id') // Join with the matieres table to get the subject name
                            ->where('notes.user_id', $userId);

        // If a subject ('matiere') is provided, filter by that as well
        if ($matiere) {
            $builder->where('matieres.nom', $matiere); // Filter based on the subject name
        }

        // Execute the query and return the result as an array
        $query = $builder->get();
        return $query->getResultArray();
    }
}

?>