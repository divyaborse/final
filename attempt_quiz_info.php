<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?= base_url('images/favlogo.png') ?>" type="image/png" sizes="16x16">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <title>Intellify | Quiz</title>
    <script>
        function preventBack() {
            window.history.forward();
        }
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            window.history.forward(1);
            null
        };
    </script>
</head>

<body>
    <nav class="navbar navbar-light bg-light px-4">
        <a class="navbar-brand">Intellify</a>

        <div class="float-right"> Welcome, <?php if (empty($this->session->userdata('Other_logged')['name'])) $this->session->userdata('Other_logged')['name'];
                                            else echo 'New User'; ?> </div>

    </nav>
    <div class="container">
        <div class="border shadow p-4 m-4">
            <h3>Intellify Quiz</h3>
            <div class="p-3 m-2">
                Try this Quiz to test your knowledge!!

                <h5>Quiz Instructions:</h5>
                <ol type="i">
                    <li>You can attempt this quiz <b>Only</b> once.</li>
                    <li>You can't resume Quiz in between</li>
                    <li>Quiz will start as soon you hit <b>Start button</b>.</li>
                    <li>
                        <div class="text-left">
                            <b>Info:</b>
                            <div class="my-2">
                                <button disabled class="btn btn-outline-success rounded-circle" style="padding: 7px 12px;">Q</button>
                                Question Not Visited
                            </div>
                            <div class="my-2">
                                <button disabled class="btn btn-success rounded-circle" style="padding: 7px 12px;">Q</button>
                                Question Answered
                            </div>
                            <div class="my-2">
                                <button disabled class="btn btn-warning rounded-circle" style="padding: 7px 12px;">Q</button>
                                Question Skipped
                            </div>
                        </div>
                    </li>
                </ol>
            </div>

            <div class="p-4 m-2">
                <a href="<?= base_url('Quizzes/start_quiz/' . $this->uri->segment(3)) ?>">
                    <button class="btn btn-success btn-lg"> Start the Quiz </button>
                </a>
                <a href="<?= base_url('Quizzes/viewquiz') ?>">
                    <button class="btn btn-outline-primary float-right">
                        Back to Dashboard
                    </button>
                </a>
            </div>
        </div>
    </div>

</body>

</html>