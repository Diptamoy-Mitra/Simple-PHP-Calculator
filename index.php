<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP CALCULATOR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-5">
                <h2 id="x">PHP CALCULATOR</h2>
                <br>
                <form method="POST" action="#">
                    <label>Enter First Number:</label>
                    <input type="number" name="fnum" placeholder="First Number" class="form-control">
                    <label>Enter second Number:</label>
                    <input type="number" name="snum" placeholder="Second Number" class="form-control">
                    <br>
                    <p>Choose any operator:</p>
                    <select name="Operator" class="form-control" >
                        <option>None</option>
                        <option>+</option>
                        <option>-</option>
                        <option>*</option>
                        <option>/</option>
                    </select>
                    <br>
                    <input type="submit" name="submit" class="btn btn-success" value="Calculate">
                    <input type="reset" class="btn btn-danger" value="Clear">
                </form>
                <br>
                <h4>The answer is: </h4>
                <div id="answer">
                    <?php
                        if(isset($_POST['submit'])){
                            $result1=$_POST['fnum'];
                            $result2=$_POST['snum'];
                            $sign=$_POST['Operator'];

                            switch($sign){
                                case 'None':
                                    echo "Please choose at least one operator";
                                    break;
                                case '+':
                                    echo $result1+$result2;
                                    break; 
                                case '-':
                                    echo $result1-$result2;
                                    break; 
                                case '*':
                                    echo $result1*$result2;
                                    break; 
                                case '/':
                                    echo $result1/$result2;
                                    break;                       
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-3"></div>
            
        </div>
    </div>
</body>
</html>