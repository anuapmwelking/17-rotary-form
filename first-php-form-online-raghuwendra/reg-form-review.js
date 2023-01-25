let prevName = document.getElementById("txtName");
let prevEmail = document.getElementById("txtEmail");
let prevDob = document.getElementById("txtDob");
let prevAddress = document.getElementById("txtAddress");
let prevNumber = document.getElementById("txtPhone");
let prevSchoolName = document.getElementById("schoolName");
let prevAge = document.getElementById("txtAge");
let regId = document.getElementById("regId");
let txtAgeGroup = document.getElementById("txtAgeGroup");
// console.log(txtAgeGroup);

//session data getting
let sessionName = sessionStorage.getItem("name");
let sessionEmail = sessionStorage.getItem("email");
let sessionDob = sessionStorage.getItem("dob");
let sessionAddress = sessionStorage.getItem("address");
let sessionNumber = sessionStorage.getItem("number");
let sessionSchoolName = sessionStorage.getItem("schoolName");
let sessionAge = sessionStorage.getItem("age");
let sessionId = sessionStorage.getItem("RegistrationID");
let ageGroup = sessionStorage.getItem("ageGroup");

let userDate = new Date(sessionDob);

// regId.append(sessionId);
window.addEventListener("DOMContentLoaded", () => {
  let sName = sessionStorage.getItem("name");
  let sEmail = sessionStorage.getItem("email");
  let sDob = sessionStorage.getItem("dob");
  let sAdreess = sessionStorage.getItem("address");
  let sNumber = sessionStorage.getItem("number");
  let sSchoolName = sessionStorage.getItem("schoolName");
  let sAgeString = sessionStorage.getItem("ageString");
  let sId = sessionStorage.getItem("RegistrationID");

  // let userYear = sessionStorage.getItem('userYear');

  prevName.value = sName;
  prevEmail.value = sEmail;
  prevDob.value = sDob;
  prevAddress.value = sAdreess;
  prevNumber.value = sNumber;
  prevSchoolName.value = sSchoolName;
  prevAge.value = sAgeString;
  txtAgeGroup.value = ageGroup;
  regId.value = sId;

});
