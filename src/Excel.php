<?php 
namespace Wikedzi\Oexcel;
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/**
*  @author Timothy Wikedzi
*/
class Excel {
   /**  @var string $sheet Name of the sheet to read data */
   protected $sheet;
   protected $writer;
   protected $spreadsheet;

   function __construct() {
      $this->spreadsheet = new Spreadsheet();
      $this->sheet = $spreadsheet->getActiveSheet();
      $this->sheet->setCellValue('A1', 'Hello World !');
      $this->writer = new Xlsx($spreadsheet);
      $this->writer->save('hello world.xlsx');
   }
 
  /**
  * Sample method 
  *
  * Always create a corresponding docblock for each method, describing what it is for,
  * this helps the phpdocumentator to properly generator the documentation
  *
  * @param string $param1 A string containing the parameter, do this for each parameter to the function, make sure to make it descriptive
  * @return string
  */
   public function write($param1){
			return "Hello World";
   }
}