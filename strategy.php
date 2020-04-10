<?php
    interface OutputInterface{
        public function load(array $arrayOfData);
    }

    class SerializedArrayOutput implements OutputInterface{
        public function load($arrayOfData){
            return serialize($arrayOfData);
        }
    }

    class JsonStringOutput implements OutputInterface{
        public function load($arrayOfData){
            return json_encode($arrayOfData);
        }
    }

    class ArrayOutput implements OutputInterface{
        public function load($arrayOfData){
            return $arrayOfData;
        }
    }
    
    class SomeClient{
        private $output;

        public function setOutput(OutputInterface $outputType){
            $this->output = $outputType;
        }

        public function loadOutput($arrayOfData){
            return $this->output->load($arrayOfData);
        }
    }
    
    $arrayOfData =array('Dog','Cat','Fish');
    $client = new SomeClient();

    // Want an array?
    $client->setOutput(new ArrayOutput());
    $data = $client->loadOutput($arrayOfData);
    var_dump($data);
    echo "<br>";
    // Want some JSON?
    $client->setOutput(new JsonStringOutput());
    $data = $client->loadOutput($arrayOfData);
    var_dump($data);
    
?>
