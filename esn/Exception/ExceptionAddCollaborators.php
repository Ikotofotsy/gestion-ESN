<?php
    
    namespace Esn\Exception;

    use Esn\Entity\Employee;
    use \Exception;


    class ExceptionAddCollaborators extends Exception{
        public function __construct(Employee $e)
        {
            $message = $e->getName() . " existe deja dans les membres de collaborateurs\n";
            parent::__construct($message);
        }
    }