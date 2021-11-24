<script>  
        var firstnumber;  
        var secondnumber;  
        var result;  
        var operations;


    function insert(num){  
         documentdocument.form1.textview.value = document.form1.textview.value + num;  
       }  
   
 
     function equal() {  
         var exp = document.form1.textview.value;  
         if(exp)  
         {  
         document.form1.textview.value = eval(exp)  
           }  
         }  
     
      function backspace(){ 

            var exp = document.form1.textview.value;  
            document.form1.textview.value = exp.substring(0, exp.length - 1);  
            }  
    
  
        function adding() {  
  
            operation = "+";  
            firstnumber = parseInt(document.lcdform.lcds.value);  
            document.lcdform.lcds.value = "0";  
            document.lcdform.lcdsu.value = firstnumber + operation;  
            //alert(firstnumber);    
  
        }  
  
        function mul() {  
  
            operation = "*";  
            firstnumber = parseInt(document.lcdform.lcds.value);  
            document.lcdform.lcds.value = "0";  
            document.lcdform.lcdsu.value = firstnumber - operation;  
  
        }  
  
        function sub() {  
  
            operation = "-";  
            firstnumber = parseInt(document.lcdform.lcds.value);  
            document.lcdform.lcds.value = "0";  
            document.lcdform.lcdsu.value = firstnumber + operation;  
  
        }  
  
        function div() {  
  
            operation = "/";  
            firstnumber = parseInt(document.lcdform.lcds.value);  
            document.lcdform.lcds.value = "0";  
            document.lcdform.lcdsu.value = firstnumber + operation;  
  
        }  
  
        function operationperc() {  
  
            operation = "%";  
            firstnumber = parseInt(document.lcdform.lcds.value);  
            document.lcdform.lcds.value = "0";  
            document.lcdform.lcdsu.value = firstnumber + operation;  
  
        }  
  
       
        </script>  