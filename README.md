In questo codice, ho creato una funzione comune che può essere utilizzata sia dalle persone che dagli animali, utilizzando un trait chiamato Nutriti. Un trait è un meccanismo in PHP che permette di condividere funzionalità tra più classi senza usare l'ereditarietà. Ho definito il metodo mangia() all'interno del trait, che semplicemente stampa "Sto mangiando".

La classe Person rappresenta una persona con tre attributi: nome, cognome e età. Ho usato il trait Nutriti all'interno della classe Person per permettere a tutte le persone di poter usare il metodo mangia(). Il costruttore della classe Person accetta tre parametri per inizializzare i dati della persona.

Ho poi creato due classi che estendono Person: Teacher (insegnante) e Student (studente). Entrambe queste classi ereditano il comportamento del trait Nutriti. La classe Teacher aggiunge un attributo specifico per il soggetto che insegna, mentre la classe Student aggiunge un attributo per la media scolastica.

Infine, ho creato una classe Animal per rappresentare un animale. Anche questa classe usa il trait Nutriti per consentire agli animali di "mangiare". La classe Animal ha due attributi: specie e razza.

Ho quindi creato due oggetti: uno di tipo Teacher e uno di tipo Animal. Ho chiamato il metodo mangia() su entrambi gli oggetti, ed entrambi hanno eseguito il metodo definito nel trait, anche se non avevano il metodo direttamente all'interno delle loro classi. Questo dimostra come il trait può essere utilizzato per condividere comportamenti tra classi diverse.

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

In this code, I created a common function that can be used by both people and animals using a trait called Nutriti. A trait in PHP is a mechanism that allows sharing functionality across multiple classes without using inheritance. I defined the mangia() method inside the trait, which simply prints "I am eating".

The Person class represents a person with three attributes: name, surname, and age. I used the Nutriti trait inside the Person class to allow all people to use the mangia() method. The constructor of the Person class accepts three parameters to initialize the person's data.

I then created two classes that extend Person: Teacher and Student. Both of these classes inherit the behavior of the Nutriti trait. The Teacher class adds an attribute specific to the subject they teach, while the Student class adds an attribute for the student's average grade.

Finally, I created an Animal class to represent an animal. This class also uses the Nutriti trait to allow animals to "eat." The Animal class has two attributes: species and breed.

I then created two objects: one of type Teacher and one of type Animal. I called the mangia() method on both objects, and both executed the method defined in the trait, even though they didn’t have the method directly in their classes. This demonstrates how a trait can be used to share behaviors across different classes.
