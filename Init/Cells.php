<?php
declare(strict_types=1);

namespace Init;

/**
 * Class Cells
 */
class Cells
{
    public $rows;
    public $cols;
    
    /**
     * Cells constructor.
     * @param $rows
     * @param $cols
     */
    public function __construct($rows, $cols)
    {
        $this->rows = $rows;
        $this->cols = $cols;
    }
    
    /**
     * @return string
     */
    public function init()
    {
        $battleships = new Battleships($this->rows, $this->cols);
        dump($battleships->initShips());
        
        $table = "<table class=\"table\">\n";
        
        $table .= "<thead>\n";
        $table .= "<th></th>\n";
        $table .= "<th>A</th>\n";
        $table .= "<th>B</th>\n";
        $table .= "<th>C</th>\n";
        $table .= "<th>D</th>\n";
        $table .= "<th>E</th>\n";
        $table .= "<th>F</th>\n";
        $table .= "<th>G</th>\n";
        $table .= "<th>H</th>\n";
        $table .= "<th>I</th>\n";
        $table .= "<th>J</th>\n";
        $table .= "</thead>\n";
        
        $table .= "<tbody>\n";
        
        for ($table_row = 1; $table_row <= 10; $table_row++)
        {
            $table .= "<tr> \n";
            $table .= "<td>$table_row</td> \n";
            for ($table_col = 1; $table_col <= 10; $table_col++)
            {
                $table_p = $table_col * $table_row;
                $table .= "<td>$table_p</td> \n";
            }
            $table .= "</tr> \n";
        }
        
        $table .= "</tbody>";
        $table .= "</table>";
        
        return $table;
    }
}