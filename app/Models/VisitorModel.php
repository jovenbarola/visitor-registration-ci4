<?php
namespace App\Models;
use CodeIgniter\Model;

class VisitorModel extends Model
{
    protected $table = "visitor";
    protected $primaryKey = "id";

    protected $allowedFields = ["firstname", "lastname", "email", "password"];

}
