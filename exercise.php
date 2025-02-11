<?php






// Voglio creare una funzione che è comune sia alle persone che agli animali

trait Nutriti{   // tratto in comune sia su person che su Animal  

public function mangia(){

    echo"Sto mangiando\n";
}

}








class Person{

    use Nutriti;  // implemento il mio tratto nella classe Person


public $name;

public $surname;

public $age;

public function __construct($_name, $_surname, $_age){   // // // io se metto un valore di default es. average = 18 posso non  passare un parametro, se non lo passo tutti i miei teacher avranno almeno 18 anni, se lo passo il mio teacher puo avere l eta che gli passo

    $this->name = $_name;
    $this->surname = $_surname;
    $this->age = $_age;


    }

}








// Teacher
class Teacher extends Person{

    // anche se non mi vede io sono sempre qui, chi? il tratto nutriti  TRAIT

    public $subject;
    
    public function __construct($_name, $_surname, $_age, $_subject){  // 3 parametri + 1 quello specifico della classe teacher

    parent::__construct($_name, $_surname, $_age);  
    $this->subject = $_subject;
    }

}








// Student
class Student extends Person{

    // anche se non mi vede io sono sempre qui, chi? il tratto nutriti  TRAIT

    public $average;

    public function __construct($_name, $_surname, $_age, $_average){ 

        parent::__construct($_name, $_surname, $_age);
        $this->average = $_average;


    }
}







// Creazione di una nuova classe che non è vincolata con Student e Teacher

class Animal{

    use Nutriti;

public $species;

public $race;

public function __construct($_species, $_race){

$this->species = $_species;
$this->race = $_race;

   }

}



$teacher = new Teacher("Ciccio", "Cicciobello", 29, "PHP"); //  usando new la prima cosa che mi aziona è il costruttore

$dog  = new Animal("cane" , "akita inu");  // costruito oggetto cane

$teacher->mangia();  // preso dal trait nutriti, trait su teacher non cè, e quindi vengono ereditati

$dog->mangia();




?>