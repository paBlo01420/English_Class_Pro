document.addEventListener("DOMContentLoaded", function () {
  const myCourses = [
    { title: "Basic English", progress: "60%", image: "course1.jpg" },
    { title: "Intermediate English", progress: "30%", image: "course2.jpg" },
  ];

  const recommendedCourses = [
    { title: "Advance English", progress: "0%", image: "course3.jpg" },
    { title: "English Conversation", progress: "0%", image: "course4.jpg" },
  ];

  const achievements = [
    { title: "Completed First Module", image: "badge1.png" },
    { title: "Excellent Quiz Result", image: "badge2.png" },
  ];

  const myCoursesList = document.getElementById("my-courses");
  const recommendedCoursesList = document.getElementById("recommended-courses");
  const achievementList = document.getElementById("achievement-list");

  // Function to render courses
  function renderCourses(courses, container) {
    courses.forEach((course) => {
      const courseCard = document.createElement("div");
      courseCard.classList.add("course-card");
      courseCard.innerHTML = `
          <img src="${course.image}" alt="${course.title}">
          <h3>${course.title}</h3>
          <p>Progress: ${course.progress}</p>
          <button class="btn">Continue</button>
        `;
      container.appendChild(courseCard);
    });
  }

  function renderAchievements(achievements, container) {
    achievements.forEach((achievement) => {
      const achievementCard = document.createElement("div");
      achievementCard.classList.add("achievement-card");
      achievementCard.innerHTML = `
          <img src="${achievement.image}" alt="${achievement.title}" style="width:100px; height: auto;">
          <p>${achievement.title}</p>
          `;
      container.appendChild(achievementCard);
    });
  }

  renderCourses(myCourses, myCoursesList);
  renderCourses(recommendedCourses, recommendedCoursesList);
  renderAchievements(achievements, achievementList);
});
