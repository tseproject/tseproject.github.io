function register()
{
    var inputName = document.getElementById("inputName").value;
    var inputEmail = document.getElementById("inputEmail").value;
    var inputPass = document.getElementById("inputPassword").value;
    var pos = document.getElementById("inputPosition").value;
    if (inputName === "" || inputEmail === "" || inputPass === "" || pos === "0")
    {
        window.alert("Please fill out all the required values!");
    }
    else
    {
        firebase.auth().createUserWithEmailAndPassword(inputEmail, inputPass)
        .then((user) => {
            window.alert("User registered successfully!");
            window.location.href='/index.html';
        })
        .catch((error) => {
            var errorCode = error.code;
            var errorMessage = error.message;
            // ..
        });
    }
}

function signin()
{
    var inputEmail = document.getElementById("inputEmail").value;
    var inputPass = document.getElementById("inputPassword").value;
    
    firebase.auth().signInWithEmailAndPassword(inputEmail, inputPass).then((user) => {
        console.log("success");
        window.location.href='/index.html';
    })
    .catch((error) => {
        var errorCode = error.code;
        var errorMessage = error.message;

        window.alert("Error:" + errorMessage )
    });
}

//TODO: get userid change signin to signout, hide sign up button
