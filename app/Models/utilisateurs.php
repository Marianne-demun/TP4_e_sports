<?php
// namespace app\Models;
// use CodeIgniter\Model;
// class Abonne extends Model
// {
//     protected $table = 'abonne';
//     protected $primaryKey ='matricule_abonne';
//     protected $allowFields = ['matricule_abonne', 'nom_abonne'];
// }
// function getAbonneByMatricule($matricule)
// {
//     return $this->find($matricule);
// }
namespace App\Models;

use CodeIgniter\Model;

class utilisateurs extends Model
{
    protected $table = 'utilisateurs';
    protected $primaryKey = 'id_utilisateurs';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';

    protected $allowedFields = [
    'id_utilisateurs',
    'login_utilisateurs',
    ];

    protected bool $allowEmptyInsert = false;
    protected bool $updateOnlyChanged = true;

    function getUtilisateursByMatricule($matricule) {
        return $this->where($matricule)->limit(1);
    }
}