function sendEmail(event) {
    event.preventDefault();
    var user_input = $("#user_input").val();
    var email_input = $("#email_input").val();
    var subject_input = $("#subject_input").val();
    var message_input = $("#message_input").val();

    Email.send({
        Host: SMTP_HOST,
        Username: SMTP_MAIL,
        Password: SMTP_PASSWORD,
        port: 587,
        To: 'harishkemail9640@gmail.com',
        From: email_input,
        Subject: "E-mail from " + subject_input,
        Body: user_input + "<br>" + message_input,
        // Attachments: [
        //     {
        //         name: "File_Name_with_Extension",
        //         path: "Full Path of the file"
        //     }]
    })
        .then(function (message) {
            alert("Mail has been sent successfully")
        });
}
