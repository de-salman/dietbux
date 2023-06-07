// Get DOM elements
const genderButtons = document.querySelectorAll(
  ".prtInputGrp:nth-child(1) button"
);
const activityButtons = document.querySelectorAll(
  ".prtInputGrp:nth-child(5) button"
);
const goalButtons = document.querySelectorAll(
  ".prtInputGrp:nth-child(6) button"
);
const ageInput = document.querySelector(".prtInputGrp:nth-child(2) input");
const heightInput = document.querySelector(".prtInputGrp:nth-child(3) input");
const weightInput = document.querySelector(".prtInputGrp:nth-child(4) input");
const bmrResult = document.querySelector(".calColRight p:nth-child(2)");
const recommendedKcalResult = document.querySelector(
  ".calColRight p:nth-child(4)"
);

// Add event listeners to buttons and inputs
genderButtons.forEach((button) => {
  button.addEventListener("click", () => {
    genderButtons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");
    calculateCalories();
  });
});

activityButtons.forEach((button) => {
  button.addEventListener("click", () => {
    activityButtons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");
    calculateCalories();
  });
});

goalButtons.forEach((button) => {
  button.addEventListener("click", () => {
    goalButtons.forEach((btn) => btn.classList.remove("active"));
    button.classList.add("active");
    calculateCalories();
  });
});

ageInput.addEventListener("input", calculateCalories);
heightInput.addEventListener("input", calculateCalories);
weightInput.addEventListener("input", calculateCalories);

// Calculate calories based on inputs
function calculateCalories() {
  // Retrieve selected gender
  const gender = document.querySelector(
    ".prtInputGrp:nth-child(1) button.active"
  ).innerText;
  const isMale = gender === "Male";

  // Retrieve selected activity level
  const activityLevel = document.querySelector(
    ".prtInputGrp:nth-child(5) button.active"
  ).innerText;
  const isFrequentlyActive =
    activityLevel === "Yes, I frequently exercise per week";

  // Retrieve selected goal
  const goal = document.querySelector(
    ".prtInputGrp:nth-child(6) button.active"
  ).innerText;
  const isWeightLoss = goal === "Loss Weight";
  const isMuscleGain = goal === "Gain Muscles";

  // Retrieve input values
  const age = parseInt(ageInput.value);
  const height = parseInt(heightInput.value);
  const weight = parseInt(weightInput.value);

  // Check if all inputs are filled
  if (isNaN(age) || isNaN(height) || isNaN(weight)) {
    bmrResult.innerText = "Loading...";
    recommendedKcalResult.innerText = "Loading...";
    return;
  }

  // Calculate BMR based on gender
  let bmr = 0;
  if (isMale) {
    bmr = 88.362 + 13.397 * weight + 4.799 * height - 5.677 * age;
  } else {
    bmr = 447.953 + 9.247 * weight + 3.098 * height - 4.33 * age;
  }

  // Calculate calories based on activity level
  let recommendedKcal = 0;
  if (isFrequentlyActive) {
    recommendedKcal = bmr * 1.55;
  } else {
    recommendedKcal = bmr * 1.2;
  }

  // Adjust calories based on goal
  if (isWeightLoss) {
    recommendedKcal -= 500;
  } else if (isMuscleGain) {
    recommendedKcal += 250;
  }

  // Format BMR and recommendedKcal values
  const bmrRange = `${Math.round(bmr) - 100} ~ ${Math.round(bmr) + 100}`;
  const recommendedKcalRange = `${Math.round(recommendedKcal) - 100} ~ ${
    Math.round(recommendedKcal) + 100
  }`;

  // Update result display
  bmrResult.innerHTML = `${Math.round(
    bmr
  ).toLocaleString()} Kcal. (${bmrRange})`;
  recommendedKcalResult.innerHTML = `${Math.round(
    recommendedKcal
  ).toLocaleString()} Kcal. (${recommendedKcalRange})`;
}
