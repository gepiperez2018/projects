<?php

require_once __DIR__ . '/vendor/autoload.php';

class Hello
{
    /**
     * Say hello.
     *
     * @param string $firstName
     * @return string $greetings
     */
    public function sayHello($firstName)
    {
        return 'Hello ' . $firstName;
    }
	
	  /**
     * Say hello2.
     *
     * @param string $firstName
     * @return string $greetings
     */
    public function sayHello2($firstName)
    {
        return 'Hola en español ' . $firstName;
    }

}



server("Hello");

 function server($clase)
{
	$serverUrl = "http://localhost/testSoap/server.php";
	$options = [
		'uri' => $serverUrl,
	];
	$server = new Zend\Soap\Server(null, $options);

	if (isset($_GET['wsdl'])) {
		$soapAutoDiscover = new \Zend\Soap\AutoDiscover(new \Zend\Soap\Wsdl\ComplexTypeStrategy\ArrayOfTypeSequence());
		$soapAutoDiscover->setBindingStyle(array('style' => 'document'));
		$soapAutoDiscover->setOperationBodyStyle(array('use' => 'literal'));
		$soapAutoDiscover->setClass($clase);
		$soapAutoDiscover->setUri($serverUrl);

		header("Content-Type: text/xml");
		echo $soapAutoDiscover->generate()->toXml();
	} 

	else
	{
		$soap = new \Zend\Soap\Server($serverUrl . '?wsdl');
		$soap->setObject(new \Zend\Soap\Server\DocumentLiteralWrapper(new $clase()));
		$soap->handle();
	}
		
	
}


?>
