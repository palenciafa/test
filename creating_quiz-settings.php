<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classiz</title>
    <link rel="stylesheet" href="stylesheet/settings_style.css">
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
          <h2 class="section-title">General</h2>
          <div class="input-group">
            <div class="title-wrapper">
              <img src="media/timer.svg" alt="Timer Icon" class="icon">
              <label class="Category">Time Limit</label>
            </div>
            <div class="time-inputs">
              <input type="number" class="input-field" placeholder="Hours" />
              <input type="number" class="input-field" placeholder="Minutes" />
              <input type="number" class="input-field" placeholder="Seconds" />
            </div>
            <p class="help-text">Set a time limit for completing the quiz or exam</p>
          </div>
          <div class="input-group">
          <label class="Subcategory">Deadline</label>
            <input type="date" class="input-field" />
            <input type="time" class="input-field" />
          </div>
          <div class="input-group">
            <div class="title-wrapper">
              <img src="media/passing.svg" alt="Passing Icon" class="icon">
              <label class="Category">Passing Score</label>
            </div>
            <input type="number" class="input-field" placeholder="score" />
            <p class="help-text">Set the required score to pass the quiz or exam</p>
          </div>
          <div class="input-group">
            <div class="title-wrapper">
              <img src="media/retry.svg" alt="Retry Icon" class="icon">
              <label class="Category">Attempts Allowed</label>
            </div>
            <input type="number" class="input-field" placeholder="points" />
            <p class="help-text">Set the number of attempts each student is allowed to attempt.</p>
          </div>

          <h2 class="section-title">Respondents’</h2>
            <div class="options">
              <div class="option">
                <span class="description">Allow respondents to view which questions they answered incorrectly.</span>
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider"></span>
                </label>
              </div>

              <div class="option">
                <span class="description">Decide if respondents can view the correct answers once the grades are released.</span>
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider"></span>
                </label>
              </div>

              <div class="option">
                <span class="description">Select whether respondents can view the total possible points and the points they received for each question.</span>
                <label class="switch">
                  <input type="checkbox">
                  <span class="slider"></span>
                </label>
              </div>
            </div>

          <button class="btn-save">Save</button>
    </div>
  </body>
</html>

