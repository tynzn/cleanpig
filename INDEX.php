<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean pig</title>
    
    <div class="table">
    <header class="header">
        <div class="row navbar">
        <h1 class="col-sm-6 "> cleanPig.ng</h1> 
        <a class="btn col-sm-2 " href=#>Clean Up</a>
        <a class="btn col-sm-2" href="#">Feedback</a>
        <a class="btn col-sm-2" href="#">Enquiry</a>
        </div>
    </header>
</div>
</head>
    <body> 
        
            <form class="myform" >
                <h3 class="heading"> Clean Up Now  </h3>
                <div class=" form-group">
                        
                        <div class="row">   
                        <div class="col-sm-9">
                            <div class="row">
                        <div class="col-md-5">
                        <label>Regular Wear</label>
                        <select class="regularWear form-control" placeholder="select one">
                            <option value="">select one</option>
                            <option >shirt</option>
                            <option>trousers</option>
                            <option>jeans</option>
                            <option>jacket</option>
                            <option>T-Shirt</option>
                            <option>roundneck</option>
                            <option>short</option>
                            <option>shirt</option>
                        </select>
                        <input  class="form-control" type="number" name="regularQuantity" placeholder="quantity" value=""> </input>
                        <button class="regBtn btn-primary" type="submit" name="addRegular"> + </button>
                    </div>
                
                     
                    <br/>
                    <div class="col-md-5">
                    <label>Traditional Wear </label>
                        <select class="traditionalWear form-control" placeholder="select one">
                            <option value="">select one</option>
                            <option>Male- Buba & sokoto</option>
                            <option>Male- only Buba</option>
                            <option>Male- Agbada(complete)</option>
                            <option>Male- only Agbada</option>
                            <option>Male- Danshiki </option>
                            <option>Female- Iro and Buba</option>
                            <option>Female- Gown</option>
                            <option>Female- Up and Down</option>
                        </select>
                        <input class="traditionalQuantity form-control" type="number" name="regularTraditional" placeholder="quantity"> </input>
                        <button class="btn-primary" type="submit" name="addTraditional"> + </button>
                    </div>
                        <br/>
                        <div class="col-md-5">                       
                             <label> Undergarment </label>
                        <select class="undergarment form-control" >
                            <option value="">select one</option>
                            <option>men- Boxers</option>
                            <option>Female- </option>
                        </select>
                        <input class="undergarmentQuantity form-control" type="number" name="regularUndergarment" placeholder="quantity"> </input>
                        <button class="btn-primary" type="submit" name="addundergarment"> + </button>
                    </div>
                        </div>
                    </div>
                    
                         <div class="col-sm-2">
                    <label >Total wear </label>
                    <input class="totalWear form-control" name="totalWears" value=0 ></input>
                    <label>Bill</label>
                    <input class="form-control" name="bill"></input>
                </div>
                    </div>
            </form>

        </body>
 <script scc="JS/bootstrap.js"></script>
    <script src="JS/calc.js" > </script>
 </html>
