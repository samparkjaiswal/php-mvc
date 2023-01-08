





$().ready
(function()
{
    $("#signupForm").validate
    ({
        rules:
         {
            fname:
            {
            required:true
            
            },
             
             lname:
             {
                required:true
                
             },
             email:
             {
                required:true,
                email:true

             },
             uname:
             {
                required:true,
                minlength:2
             },
             pass:
             {
                required:true,
                minlength:5
             },
             cpass:
             {
                required:true,
                minlength:5,
                equalTo:"#pass"
             },
             class:
             {
                required:true
                
             },
             section:
             {
                required:true
             },
             faname:
             {
                required:true
                
             },
             maname:
             {
                required:true
                
             },
             address:
             {
                required:true
             },
             phone:
             {
                required:true,
                minlength:10
             },

             'language[]':{
                required:true,
                minlength:5
             }
            

         },
            
             messages:
             {
                fname:
                {
                    required: "Please enter your firstname"
                },
                lname:
                {
                   required: "Please enter your lastName"
                },
                email:
                {
                    required: "Please enter a email",
                    email: "Please write a valid email"
                },
                uname:
                {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 2 characters"
                },
                pass:
                {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                cpass:
                {
                    required: "Please provide password",
                    minlength: "Your password must be at least 5 charecter long",
                    equalTo: "Please enter the same password as above"
                },
                class:
                {
                    required: "Class field are blank"
                },
                section:
                {
                    required: "Section field are blank"
                },
                faname:
                {
                    required: "Please enter fathername"
                },
                maname:
                {
                    required: "Please enter mothername"
                },
                address:
                {
                    required: "Please enter address"
                },
                phone:
                {
                    required: "Please enter phone number",
                    minlength: "Your Phone Number must be at least 10 charecter long"
                },
                'language[]':
                {
                    minlength: "Please choose at least five subject"
                }
                
                



             },
            

             
    });
});