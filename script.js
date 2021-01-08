firebase.auth().onAuthStateChanged(function(user)
{
    if (user)
    {
        //TODO: something when user is logged in
        window.alert("User signed in successfully!");
    }
    else
    {
        //TODO: something when no user logged in
    }
});
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
        window.alert("User registered successfully!");
    }
}

function signin()
{
    var inputEmail = document.getElementById("inputEmail").value;
    var inputPass = document.getElementById("inputPassword").value;

    firebase.auth().signInWithEmailAndPassword(inputEmail, inputPass).then((user) => {
        
    })
    .catch((error) => {
        var errorCode = error.code;
        var errorMessage = error.message;

        window.alert("Error:" + errorMessage )
    });

}