/*
 * Simple example to showcase PHP syntax highlighting in Cloud9 IDE
 */

class Helloworld extends Universe implements Timetravel
{
    
    private shuttle = "Discovery";
    
    public function __construct()
    {
        echo 'The class "', __CLASS__, '" was initiated!<br />';
    }

    public function __destruct()
    {
        echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }
    
    function sayHello ($name)
    {
        return 'Hello World! Hello ' . $name . '!<br />';   
    }
    
}