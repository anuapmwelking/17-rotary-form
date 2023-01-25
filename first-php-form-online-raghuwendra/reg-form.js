let name = document.getElementById("txtName");
let email = document.getElementById("txtEmail");
let userDob = document.getElementById("txtDob");
let address = document.getElementById("txtAddress");
let number = document.getElementById("txtPhone");
let schoolName = document.getElementById("schoolName");
let submitBtn = document.getElementById("submitBtn");

// function myFunction() {
//   // console.log('runigS');
//   ageCalculator();
//   console.log(sessionStorage.getItem('ageString'));

// }
// dob.addEventListener('keyup', () => {
//   console.log('running');
// })
function validation() {
  if (number.value.length < 10 || number.value.length > 10) {
    alert("number can't be less than 10 or greater than 10");
    return false;
  }
  // randomRegistrationNumber();
  saveDataFunc();
  ageCalculator();
}
function ageCalculator() {
  //collect input from HTML form and convert into date format
  //   var userDob = new Date(dob.value);

  var userinput = userDob.value;
  var dob = new Date(userinput);

  //check user provide input or not
  // if (userinput == null || userinput == '') {
  // 	document.getElementById("message").innerHTML = "**Choose a date please!";
  // 	return false;
  // }

  //execute if user entered a date
  // else {
  //extract and collect only date from date-time string
  var mdate = userinput.toString();
  var dobYear = parseInt(mdate.substring(0, 4), 10);
  var dobMonth = parseInt(mdate.substring(5, 7), 10);
  var dobDate = parseInt(mdate.substring(8, 10), 10);

  //get the current date from system
  var today = new Date("2023-01-29");
  //date string after broking
  var birthday = new Date(dobYear, dobMonth - 1, dobDate);

  //calculate the difference of dates
  var diffInMillisecond = today.valueOf() - birthday.valueOf();

  //convert the difference in milliseconds and store in day and year variable
  var year_age = Math.floor(diffInMillisecond / 31536000000);
  var day_age = Math.floor((diffInMillisecond % 31536000000) / 86400000);

  //when birth date and month is same as today's date
  // if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {
  //   alert("Happy Birthday!");
  // }

  var month_age = Math.floor(day_age / 30);
  day_ageday_age = day_age % 30;

  var tMnt = month_age + year_age * 12;
  var tDays = tMnt * 30 + day_age;

  //DOB is greater than today's date, generate an error: Invalid date
  if (dob > today) {
    document.getElementById("result").innerHTML =
      "Invalid date input - Please try again!";
  } else {
    let ageString =
      year_age + " years " + month_age + " months " + day_age + " days";
    // console.log(year_age);
    // console.log(month_age);
    // console.log(day_age);
    // console.log(ageString);

    sessionStorage.setItem("ageString", ageString);
    sessionStorage.setItem("userYear", year_age);
    if (year_age >= 3 && year_age <= 6) {
      // function randomRegistrationNumber(min, max) { // min and max included
      //   return 'A' + Math.floor(Math.random() * (max - min + 1) + min)
      // }

      // let id = randomRegistrationNumber(1, 1999)
      function getRandomNumber(min, max) {
        let step1 = max - min + 1;
        let step2 = Math.random() * step1;
        let result = Math.floor(step2) + min;
        return result;
      }

      function createArrayOfNumbers(start, end) {
        let myArray = [];
        for (let i = start; i <= end; i++) {
          myArray.push(i);
        }
        console.log(myArray);
        sessionStorage.setItem("array", myArray);
        return myArray;
      }

      let numbersArray = createArrayOfNumbers(1, 1999);
      function randomRegistrationNumber() {
        if (numbersArray.length == 0) {
          // output.innerText = 'No More Random Numbers';
          return;
        }

        let randomIndex = getRandomNumber(0, numbersArray.length - 1);
        let randomNumber = numbersArray[randomIndex];
        numbersArray.splice(randomIndex, 1);

        return "A" + randomNumber;
      }
      let id = randomRegistrationNumber();
      sessionStorage.setItem("RegistrationID", id);
      sessionStorage.setItem("ageGroup", "3 to 6");
    }
    if (year_age >= 7 && year_age <= 12) {
      function getRandomNumber(min, max) {
        let step1 = max - min + 1;
        let step2 = Math.random() * step1;
        let result = Math.floor(step2) + min;
        return result;
      }

      function createArrayOfNumbers(start, end) {
        let myArray = [];
        for (let i = start; i <= end; i++) {
          myArray.push(i);
        }
        console.log(myArray);
        sessionStorage.setItem("array", myArray);

        return myArray;
      }

      let numbersArray = createArrayOfNumbers(2000, 3999);
      function randomRegistrationNumber() {
        if (numbersArray.length == 0) {
          // output.innerText = 'No More Random Numbers';
          return;
        }

        let randomIndex = getRandomNumber(0, numbersArray.length - 1);
        let randomNumber = numbersArray[randomIndex];
        numbersArray.splice(randomIndex, 1);

        return "B" + randomNumber;
      }
      // let id = randomRegistrationNumber();
      let id = randomRegistrationNumber();
      sessionStorage.setItem("RegistrationID", id);
      sessionStorage.setItem("ageGroup", "7 to 12");
    }
    if (year_age >= 13 && year_age <= 15) {
      function getRandomNumber(min, max) {
        let step1 = max - min + 1;
        let step2 = Math.random() * step1;
        let result = Math.floor(step2) + min;
        return result;
      }

      function createArrayOfNumbers(start, end) {
        let myArray = [];
        for (let i = start; i <= end; i++) {
          myArray.push(i);
        }
        console.log(myArray);
        sessionStorage.setItem("array", myArray);

        return myArray;
      }

      let numbersArray = createArrayOfNumbers(4000, 5999);
      function randomRegistrationNumber() {
        if (numbersArray.length == 0) {
          // output.innerText = 'No More Random Numbers';
          return;
        }

        let randomIndex = getRandomNumber(0, numbersArray.length - 1);
        let randomNumber = numbersArray[randomIndex];
        numbersArray.splice(randomIndex, 1);

        return "C" + randomNumber;
      }
      // let id = randomRegistrationNumber();
      let id = randomRegistrationNumber();
      sessionStorage.setItem("RegistrationID", id);
      sessionStorage.setItem("ageGroup", "13 to 15");
    }
    if (year_age >= 16 && year_age <= 17) {
      function getRandomNumber(min, max) {
        let step1 = max - min + 1;
        let step2 = Math.random() * step1;
        let result = Math.floor(step2) + min;
        return result;
      }

      function createArrayOfNumbers(start, end) {
        let myArray = [];
        for (let i = start; i <= end; i++) {
          myArray.push(i);
        }
        console.log(myArray);
        sessionStorage.setItem("array", myArray);

        return myArray;
      }

      let numbersArray = createArrayOfNumbers(6000, 7999);
      function randomRegistrationNumber() {
        if (numbersArray.length == 0) {
          // output.innerText = 'No More Random Numbers';
          return;
        }

        let randomIndex = getRandomNumber(0, numbersArray.length - 1);
        let randomNumber = numbersArray[randomIndex];
        numbersArray.splice(randomIndex, 1);

        return "D" + randomNumber;
      }
      // let id = randomRegistrationNumber();

      let id = randomRegistrationNumber();
      sessionStorage.setItem("RegistrationID", id);
      sessionStorage.setItem("ageGroup", "16 to 17");
    }
    // if (year_age >= 3 && year_age <= 6) {
    //   function randomRegistrationNumber(min, max) {
    //     // min and max included
    //     return "A" + Math.floor(Math.random() * (max - min + 1) + min);
    //   }

    //   randomRegistrationNumber(1, 1999);
    //   let id = randomRegistrationNumber(1, 1999);

    //   sessionStorage.setItem("RegistrationID", id);
    //   sessionStorage.setItem("ageGroup", "3 to 6");
    // }
    // if (year_age >= 7 && year_age <= 12) {
    //   function randomRegistrationNumber(min, max) {
    //     // min and max included
    //     return "B" + Math.floor(Math.random() * (max - min + 1) + min);
    //   }

    //   let id = randomRegistrationNumber(2000, 3999);

    //   sessionStorage.setItem("RegistrationID", id);
    //   sessionStorage.setItem("ageGroup", "7 to 12");
    // }
    // if (year_age >= 13 && year_age <= 15) {
    //   function randomRegistrationNumber(min, max) {
    //     // min and max included
    //     return "C" + Math.floor(Math.random() * (max - min + 1) + min);
    //   }

    //   let id = randomRegistrationNumber(4000, 5999);

    //   sessionStorage.setItem("RegistrationID", id);
    //   sessionStorage.setItem("ageGroup", "13 to 15");
    // }
    // if (year_age >= 16 && year_age <= 17) {
    //   function randomRegistrationNumber(min, max) {
    //     // min and max included
    //     return "D" + Math.floor(Math.random() * (max - min + 1) + min);
    //   }

    //   let id = randomRegistrationNumber(6000, 8000);

    //   sessionStorage.setItem("RegistrationID", id);
    //   sessionStorage.setItem("ageGroup", "16 to 17");
    // }
  }
}

function saveDataFunc() {
  sessionStorage.setItem("name", name.value);
  sessionStorage.setItem("email", email.value);
  sessionStorage.setItem("dob", userDob.value);
  sessionStorage.setItem("address", address.value);
  sessionStorage.setItem("number", number.value);
  sessionStorage.setItem("schoolName", schoolName.value);
}
window.addEventListener("DOMContentLoaded", () => {
  let sName = sessionStorage.getItem("name");
  let sEmail = sessionStorage.getItem("email");
  let sDob = sessionStorage.getItem("dob");
  let sAdreess = sessionStorage.getItem("address");
  let sNumber = sessionStorage.getItem("number");
  let sSchoolName = sessionStorage.getItem("schoolName");

  name.value = sName;
  email.value = sEmail;
  userDob.value = sDob;
  address.value = sAdreess;
  number.value = sNumber;
  schoolName.value = sSchoolName;
});
