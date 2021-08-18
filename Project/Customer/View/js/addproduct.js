
    function jsValid() 
    { 
        const form = document.getElementById('form'); // full form
        const bookname = document.getElementById('bookname');
        const authorname = document.getElementById('authorname');
        const edition = document.getElementById('edition');
        const numberofcopy = document.getElementById('numberofcopy');

         
        var flag = true;       
        checkInputs();

 

        function checkInputs() 
        {
            //get the value from inputs.

            const  booknameValue = bookname.value.trim();   
            const  authornameValue = authorname.value.trim();   
            const  editionValue = edition.value.trim();   
            const  numberofcopyValue = numberofcopy.value.trim();   

            

            if (booknameValue === ''){
                //show error
                // add error class
                setErrorFor(bookname,'Name cannot be blank');
                flag = false;
            }
            else if(booknameValue.length > 100){
                setErrorFor(bookname,'Name cannot be > 100 character');
                flag = false;
            }
            else{
                // add success class
                setSuccessFor(bookname);
            }



            if (authornameValue === ''){
                setErrorFor(authorname,'Description cannot be blank');
                flag = false;
            }
            else if(authornameValue.length > 50) {
                setErrorFor(authorname,'Description cannot be > 50 character');
                flag = false;
            }
            else setSuccessFor(authorname);



            if (editionValue === ''){
                setErrorFor(edition,'Price cannot be blank');
                flag = false;
            }
            else if(editionValue.length > 10) {
                setErrorFor(edition,'Price cannot be > 10 character');
                flag = false;
            }
            else setSuccessFor(edition);

         

            if (numberofcopyValue === '') {
                setErrorFor(numberofcopy,'Quantity cannot be blank');
                flag = false;
            }
            else if(numberofcopyValue.length > 10) {
                setErrorFor(numberofcopy,'Quantity cannot be > 10 character');
                flag = false;
            }
            else setSuccessFor(numberofcopy);

 
         
          }

         function setErrorFor(input, message)
         {
            const formControl = input.parentElement; // .form-control
            const small = formControl.querySelector('small');

            // add error message inside small
            small.innerText = message;

            // add error class
            formControl.className = 'form-control error';
         } 

         function setSuccessFor(input)
         {
            const formControl = input.parentElement; // .form-control
         
            // add success class
            formControl.className = 'form-control success';
         }

         return flag;
         
    }