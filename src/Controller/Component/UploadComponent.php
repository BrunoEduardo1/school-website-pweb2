<?php
	
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Http\Client;
use Cake\Routing\Router;

class UploadComponent extends Component
{
    var $controller = true;

    var $path = "";

    var $maxSize; //Tamanho máximo permitido
    //"bmp","gif","mp3","wma","mp4","wmv","avi","MP3","pdf","doc","xls","docx","rtf"
    var $allowedExtensions = array("jpg","jpeg","png","JPG",'PNG'); //Arquivos permitidos

    var $logErro = ""; //Log de erro


    public function startup(){

        $this->path = WWW_ROOT . 'public';

        $this->maxSize = 2*1024*1024; // 2MB

    }

    public function setPath($p)

    {

        if ($p!=NULL){

            $this->path = WWW_ROOT . 'public/' . $p;

            //$this->path = eregi_replace("/", DS, $this->path);

            //$this->path = eregi_replace("\\\\", DS, $this->path);

            return true;

        }

    }

    //Seta novo tamanho máximo

    public function setMaxFileSize($size)

    {

        $this->maxSize = $size;

    }

    //Adiciona nova extensão no array

    public function addAllowedExt($ext)

    {

        if (is_array($ext))

        {

            $this->allowedExtensions = array_merge($this->allowedExtensions, $ext);

        }else{

            array_push($this->allowedExtensions, $ext);

        }

    }

    //Retorna extensão de arquivo

    public function getExt($file)

    {

        $p = explode(".", $file);

        return $p[count($p)-1];

    }

    //Exibe lista de extensões em array

    public function viewExt()

    {

        $list_tmp = "";

        for($a=0; $a<count($this->allowedExtensions); $a++)

        {

            $list_tmp.= $this->allowedExtensions[$a].", ";

        }

        return substr($list_tmp, 0, -2);

    }

    //Verifica se arquivo pode ser feito upload

    public function verifyUpload($file)

    {

        $passed = false; //Variável de controle

        if(is_uploaded_file($file["tmp_name"]))

        {

            $ext = $this->getExt($file["name"]);

            if((count($this->allowedExtensions) == 0) || (in_array($ext, $this->allowedExtensions)))

            {

                $passed = true;

            }

        }

        return $passed;

    }

    //Copia arquivo para destino

    public function copyUploadedFile($source, $destination="")

    {

        //Destino completo

        $this->path = $this->path . $destination . DS;

        //Cabeçalho de log de erro

        $logMsg = '=============== UPLOAD LOG ===============<br />';

        $logMsg .= 'Pasta destino: ' . $this->path . '<br />';

        $logMsg .= 'Nome do arquivo: ' . $source["name"] . '<br />';

        $logMsg .= 'Tamanho do arquivo: ' . $source["size"] . '

bytes<br />';

        $logMsg .= 'Tipo de arquivo: ' . $source["type"] . '<br />';

        $logMsg .=

                '---------------------------------------------------------------<br />';

        $this->setLog($logMsg);

        //Verifica se arquivo é permitido

        if($this->verifyUpload($source))

        {

            $novo_arquivo = $this->verifyFileExists($source["name"]);

            if(move_uploaded_file($source["tmp_name"], $this->path . $novo_arquivo))

                return $novo_arquivo;

            else

            {

                $this->setLog("-> Erro ao enviar arquivo<br />");

                $this->setLog(" Obs.: ".$this->getErrorUpload($source["error"])."<br />");

                return false;

            }

        }else

        {

            $this->setLog("-> O arquivo que você está tentando enviar

não é permitido pelo administrador<br />");

            $this->setLog(" Obs.: Apenas as extensões ".$this->viewExt()." são permitidas.<br />");

            return false;

        }

    }

    //Gerencia log de erro

    public function setLog($msg)

    {

        $this->logErro.=$msg;

    }

    public function getLog()

    {

        return $this->logErro;

    }

    public function getErrorUpload($cod="")

    {

        switch($cod)

        {

            case 1:

                return "Arquivo com tamanho maior que definido no servidor.";

                break;

            case 2:

                return "Arquivo com tamanho maior que definido no formulário de envio.";

                break;

            case 3:

                return "Arquivo enviado parcialmente.";

                break;

            case 4:

                return "Não foi possível realizar upload do arquivo.";

                break;

            case 5:

                return "The servers temporary folder is missing.";

                break;

            case 6:

                return "Failed to write to the temporary folder.";

                break;

        }

    }

    //Checa se arquivo já existe no servidor, e renomea

    public function verifyFileExists($file)

    {
        if (!file_exists($this->path)) { // Verificar se a pasta existe, caso não ele cria a pasta
            mkdir($this->path, 0777, true);
        }

        return $this->renameFile($file);
    }

    //Renomea Arquivo, para evitar sobescrever

    public function renameFile($file)

    {

        $ext = $this->getExt($file); //Retorna extensão do arquivo

        $file_tmp = substr($file, 0, -4); //Nome do arquivo, semextensao

        do

        {

            $file_tmp = base64_encode(date("His"));

        }while(file_exists($this->path.$file_tmp.".".$ext));

        return $file_tmp.".".$ext;

    }

}