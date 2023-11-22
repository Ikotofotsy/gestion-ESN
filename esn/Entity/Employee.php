<?php
    namespace Esn\Entity;

    class Employee{
        private string $name;
        private string $adress;
        private string $profile;
        private float $salary;
        private string  $contact;

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

        public function setProfile(?String $profile)
        {
            $this->profile = $profile;

            return $this;
        }

        public function getProfile()
        {
            return $this->profile;
        }

        public function setSalary(?float $salary)
        {
            $this->salary = $salary;

            return $this;
        }

        public function getSalary()
        {
            $this->calculSalary();

            return $this->salary;
        }

        public function setContact(?string $contact)
        {
            $this->contact = $contact;

            return $this;
        }

        public function getContact()
        {
            return $this->contact;
        }

        private function calculSalary()
        {
            if($this->profile == 's')
                return $this->setSalary(200000);
            else if($this->profile == 'c')
                return $this->setSalary(150000);
            else if($this->profile == 'j')
                return $this->setSalary(100000);

            return $this->setSalary(0);
        }

    }

    