function displayMonthNames() {
    var monthNames = [
      "January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];
  
    var monthString = "";
  
    for (var i = 0; i < monthNames.length; i++) {
      monthString += monthNames[i] + " ";
    }
  
    return monthString;
  }
  
  var allMonths = displayMonthNames();
  console.log(allMonths);
  