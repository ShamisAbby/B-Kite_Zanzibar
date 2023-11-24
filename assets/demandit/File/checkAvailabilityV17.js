var checkAvailability = function (bookedPeriods, requestedPeriodFrom, requestedPeriodTo) {
  for (let i = 0; i < bookedPeriods.length; i++) {
    const bookedPeriod = bookedPeriods[i];
    const from = new Date(bookedPeriod.from.split(' ')[0]);
    const to = new Date(bookedPeriod.to.split(' ')[0]);
    const requestedFrom = new Date(requestedPeriodFrom);
    const requestedTo = new Date(requestedPeriodTo);

    if (
      (requestedFrom > from && requestedFrom < to) ||  // Overlaps the start of a booked period (excluding check-out)
      (requestedTo > from && requestedTo < to) ||      // Overlaps the end of a booked period (excluding check-in)
      (requestedFrom <= from && requestedTo >= to)      // Encompasses a booked period
    ) {
      return false; // Period is not available
    }
  }

  return true; // Period is available
}

var isWeekend = function (date) {
  const day = date.getDay();
  return day === 0 || day === 6; // Sunday (0) or Saturday (6)
};

var checkNumberOfDays = function (from, to) {
  $('.noVacancy').hide()
  $('.yesVacancy').hide()
  $('.wrongDates').hide()
  $('.longPeriod').hide();
  $('.weekendPeriod').hide();

  var start = new Date(from)
  var end = new Date(to)
  var timeDifference = Math.abs(end.getTime() - start.getTime());
  var numberOfDays = Math.ceil(timeDifference / (1000 * 3600 * 24));

  if (numberOfDays > 30) {
    $('.longPeriod').show();
    $('#bookingForm').hide();
  } else if (numberOfDays < 4 || start > end || start <= new Date()) {
    $('.wrongDates').show();
    $('#bookingForm').hide();
  } else if (numberOfDays === 4) {
    var currentDay = new Date(start);
    var hasWeekendDay = 0;
    for (let i = 0; i < numberOfDays; i++) {
      if (isWeekend(currentDay)) {
        hasWeekendDay++;
      }
      currentDay.setDate(currentDay.getDate() + 1);
    }
    if (hasWeekendDay > 1) {
      $('.weekendPeriod').show();
      $('#bookingForm').hide();
    } else {
      performAvailabilityCheck(from, to);
    }
  } else {
    performAvailabilityCheck(from, to);
  }
}

function performAvailabilityCheck(from, to) {
  //ajax to check, if this request lies in blocked timeframe
  $.ajax({
    type: 'GET',
    url: `index.cfm?page=138724&from=${from}&to=${to}`,
    dataType: 'json',
  }).done(function (responseList) {
    if (responseList.responseList.length === 0) {
      $('.yesVacancy').show()
      addDateToFormInputs(from, to);
      $('#bookingForm').show();
    } else {
      const bookedPeriods = responseList.responseList
      if (bookedPeriods.length === 0) {
        $('.yesVacancy').show()
        addDateToFormInputs(from, to);
        $('#bookingForm').show();
      } else if (checkAvailability(bookedPeriods, from, to)) {
        $('.yesVacancy').show()
        addDateToFormInputs(from, to);
        $('#bookingForm').show();
      } else {
        $('.noVacancy').show()
        $('#bookingForm').hide();
      }
    }
  }).fail(function (error) {
    console.log('Error period request', error);
  })
}

function addDateToFormInputs (fromDate, toDate) {
     $('#fg_formfield_id_70710').val(fromDate);
     $('#fg_formfield_id_70711').val(toDate);
     $('#fg_formfield_id_70600').val(fromDate);
     $('#fg_formfield_id_70601').val(toDate);
     $('#fg_formfield_id_74913').val(fromDate);
     $('#fg_formfield_id_74914').val(toDate);
}


function initDatePickerAvail() {
  $("#from, #to, #from-mo, #to-mo").datepicker({
    dateFormat: "yy-mm-dd",
    altFormat: "yy-mm-dd",
    minDate: new Date()
  }).attr("readonly", true);
}

$(document).ready(function () {
  initDatePickerAvail();

  var queryString = window.location.search;
  var urlParams = new URLSearchParams(queryString);
  var fromParam = urlParams.get('from');
  var toParam = urlParams.get('to');

  const identificator = $('#identificator').html();

  if (identificator === 'de') {
    let fromValDe = $('#fg_formfield_id_70710');
    let toValDe = $('#fg_formfield_id_70711');
    if (!fromParam && !toParam && (fromValDe.val() === "" && toValDe.val() === "")) {
      $('#checkAvailabilityForm').show();
      $('#bookingForm').hide();
    }
  } else if (identificator === 'ag') { // agency
      let fromValAg = $('#fg_formfield_id_74913');
      let toValAg = $('#fg_formfield_id_74914');

      if (fromValAg.val() === "" && toValAg.val() === "") {
        $('#checkAvailabilityForm').show();
        $('#bookingForm').hide();
      }
  } else {
    let fromValEn = $('#fg_formfield_id_70600');
    let toValEn = $('#fg_formfield_id_70601');

    if (!fromParam && !toParam && (fromValEn.val() === "" && toValEn.val() === "")) {
      $('#checkAvailabilityForm').show();
      $('#bookingForm').hide();
    }
  }
  
});
