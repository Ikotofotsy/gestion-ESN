<?php
    namespace Esn\Entity;

    use Esn\Exception\{
        ExceptionAddCollaborators,
        ExceptionDellCollaborators,
        ExceptionCollaboratorIntrouvable
    };
    class Company{
        private string $name;
        private string $adress;
        private int $nbDev;
        private array $collaborators;

        public function setName(?String $name)
        {
            $this->name = $name;

            return $this;
        }

        public function getName()
        {
            return $this->name;
        }

        public function setAdress(?String $adress)
        {
            $this->adress = $adress;

            return $this;
        }

        public function getAdress()
        {
            return $this->adress;
        }

        public function setNbDev(?int $nb)
        {
            $this->nbDev = $nb;

            return $this;
        }

        public function getNbDev()
        {
            $this->calculNbDev();

            return $this->nbDev;
        }

        private function calculNbDev()
        {
            return $this->setNbDev(count($this->collaborators));
        }

        public function addCollabs(Employee $e)
        {
            try{
                if(empty($this->collaborators))
                    $this->collaborators[] = $e;
                else
                {
                    if(!in_array($e,$this->collaborators))
                        $this->collaborators[] = $e;
                    else 
                        throw new ExceptionAddCollaborators($e);
                }
            }
            catch(ExceptionAddCollaborators $e){
                print($e->getMessage());
            }
        }

        public function delCollabs(Employee $e)
        {
            try{
                if(count($this->collaborators) !=0 )
                {   
                    $index = array_search($e,$this->collaborators);
                    if($index !== false)
                        array_splice($this->collaborators,$index,1);
                    else 
                        throw new ExceptionCollaboratorIntrouvable($e);
                }
                else
                    throw new ExceptionDellCollaborators($this);
                    
            }catch(ExceptionDellCollaborators $e){
                print($e->getMessage());
            }
            catch(ExceptionCollaboratorIntrouvable $e){
                print($e->getMessage());
            }
        }
    }


    
    

    