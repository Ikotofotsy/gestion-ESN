<?php
    
    namespace Esn\Exception;

    use Esn\Entity\Company;
    use \Exception;


    class ExceptionDellCollaborators extends Exception{
        public function __construct(Company $c)
        {
            $message = $c->getName() . " n'a aucun collaborateur\n";
            parent::__construct($message);
        }
    }