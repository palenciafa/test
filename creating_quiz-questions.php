<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classiz</title>
    <link rel="stylesheet" href="stylesheet/questions_style.css">
</head>
<body>
  <!-- <div class="container">
    <nav class="sidebar">
      <h1 class="logo">class<span class="colored">iz.</span></h1>
      <h2 class="section-title">MENU</h2>
      <ul class="menu">
        <li><a href="#" class="menu-item">Home</a></li>
        <li><a href="#" class="menu-item">Classes</a></li>
        <li><a href="#" class="menu-item">Create Class</a></li>
        <li><a href="#" class="menu-item">Create Activity</a></li>
        <li>
          <label class="checkbox-container">
            <input type="checkbox" class="checkbox">
            <span>Not linked to a Class</span>
          </label>
        </li>
      </ul>
      <h2 class="section-title">ASSESSMENTS</h2>
      <ul class="menu">
        <li><a href="#" class="menu-item">Quizzes</a></li>
        <li><a href="#" class="menu-item">Exams</a></li>
      </ul>
      <h2 class="section-title">USER</h2>
      <ul class="menu">
        <li><a href="#" class="menu-item">Logout</a></li>
        <li><a href="#" class="menu-item">Help & Support</a></li>
      </ul>
      <div class="search-box">
        <input type="text" placeholder="Search" class="search-input">
      </div>
    </nav> -->

    <main class="main-content">
        <div class="btn-group">
            <button class="btn-primary"><img src="media/question.svg" alt="Question Icon" class="btn-primary-icon">Questions</button>
            <button class="btn-primary"><img src="media/settings.svg" alt="Settings Icon" class="btn-primary-icon">Settings</button>
        </div>
        <div class="icon-group">
            <button class="btn-icon-preview">
                <img src="media/preview.svg" alt="Eye Icon">
            </button>
            <button class="btn-icon-edit">
                <img src="media/edit.svg" alt="Edit Icon">
            </button>
        </div>
        <div class="card">
            <label for="quiz-title">Provide the quiz title</label>
            <input type="text" id="quiz-title" class="input" placeholder="Quiz Title">

            <label for="quiz-desc">Enter a short description for the quiz</label>
            <textarea id="quiz-desc" class="textarea" placeholder="Quiz Description"></textarea>

            <label for="quiz-instructions">Include any instructions or guidelines for the students</label>
            <textarea id="quiz-instructions" class="textarea" placeholder="Quiz Instructions"></textarea>
        </div>

        <div class="cardQuestions">
            <label for="question">Provide the question</label>
            <input type="text" id="question" class="input" placeholder="Question">

            <label for="choices">List of the choices</label>
            <div id="choices" class="choices">
                <div class="option-wrapper">
                    <input type="text" class="input option" placeholder="Option 1">
                    <button class="btn-delete"><img src="media/delete.svg" alt="Delete Icon"></button>
                </div>
            </div>

            <div id="additionalOptions"></div>
            <button id="addOptionBtn" class="btn-secondary">Add Another Option</button>

            <label for="correct-answer" class="correct-answer-label">Correct Answer:</label>
            <input type="text" id="correct-answer" class="input" placeholder="Enter correct answer">

            <button class="btn-add"><img src="media/add.svg" alt="Add Icon"></button>  
        </div>


        <button class="btn-create">Create</button>
        
        
    </main>
</div>

<script src="scripts/script.js"></script>

</body>
</html>
