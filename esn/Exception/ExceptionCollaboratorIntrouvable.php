<?php
    
    namespace Esn\Exception;

    use Esn\Entity\Employee;
    use \Exception;


    class ExceptionCollaboratorIntrouvable extends Exception{
        public function __construct(Employee $e)
        {
            $message = $e->getName() . " introuvable\n";
            parent::__construct($message);
        }
    }