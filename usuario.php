<pre><?php 


 class Usuario{

  private $nombre;
  private $email;
  private $pass;

  public function __construct( $name, $email, int $pass ){
    $this->nombre = $name;
    $this->email = $email;
    $this->pass = $this->hashear($pass);
  }

  public function nuevoMail( $mail ){
    $this->email = $mail;
  }

  public function nuevoPass( $pass ){
    $this->pass = $this->hashear($pass);
  }

  private function hashear( $pass ){
    return password_hash( $pass, PASSWORD_DEFAULT);
  }

  public function dameTuNombre(){
    return 'Hola mi nombre es: '.$this->nombre;
  }

  public function sumar($uno, $dos):int{
    return $uno+$dos;
  }

}