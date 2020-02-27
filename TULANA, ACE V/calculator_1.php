<?php 
$result = "";
class calculator
{
    var $a;
    var $b;

    function checkoperation($operator)
    {
        switch($operator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;
			
			case '*':
            return $this->a * $this->b;
            break;
			
			case '/':
            return $this->a / $this->b;
            break;
			
			case '%':
            return $this->a % $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->checkoperation($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
<table align="center" style="background:#FFBF00; width:900px; color:#FFFFFF; padding:500px;">
    <tr>
        <td><strong><?php echo $result; ?><strong></td>
    </tr>
    <tr>
        <td>First Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Second Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td>Select Operator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
			<option value="%">%</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>

</table>
</form>
</body>

