
$(document).ready(function() {
    $('#navClose').click(function() {
        $('nav').animate({'left': '100%'});
        $('main').animate({'width': '100%'});
        $('#messages').animate({'margin-left': '-81px'}, { duration: 400, queue: false });
        $('#messages').animate({'left': '100%'}, { duration: 400, queue: false });
    });

    $('#navOpen').click(function() {
        $('nav').animate({'left': '85%'});
        $('main').animate({'width': '85%'});
        $('#messages').animate({'left': '85%'}, { duration: 400, queue: false });
        $('#messages').animate({'margin-left': '-41px'}, { duration: 400, queue: false });
    });

    $('#messagesOpen').click(function() {
        $('#messagesWindow').animate({'top' : '10%'}, { duration: 1000, queue: false });
    });

    $('#messagesClose').click(function() {
        $('#messagesWindow').animate({'top' : '-90%'}, { duration: 1000, queue: false});
    });

    $('#yearDiaryButton').click(function() {
        $('.selector').animate({'margin-top': '0px'});
    });

    $('#monthDiaryButton').click(function() {
        $('.selector').animate({'margin-top': '81px'});
    });

    $('#dayDiaryButton').click(function() {
        $('.selector').animate({'margin-top': '161px'});
    });

    $('#yearDiaryButton').click(function() {
        $('#yearCalendar').animate({'top': '20%'});
        $('#monthCalendar').animate({'top': '100%'});
        $('#dayCalendar').animate({'top': '100%'});
    });

    $('#monthDiaryButton').click(function() {
        $('#yearCalendar').animate({'top': '100%'});
        $('#monthCalendar').animate({'top': '20%'});
        $('#dayCalendar').animate({'top': '100%'});
    });
    
    $('#dayDiaryButton').click(function() {
        $('#yearCalendar').animate({'top': '100%'});
        $('#monthCalendar').animate({'top': '100%'});
        $('#dayCalendar').animate({'top': '20%'});
    });

    $('#addEventButton').click(function() {
        $('#addEventWindow').animate({'top': '20%'}, { duration: 1000, queue: false});
    });

    $('#addEventClose').click(function() {
        $('#addEventWindow').animate({'top': '-80%'}, { duration: 1000, queue: false});
    });

    $('#timetableViewAButton').click(function() {
        $('.selector').animate({'margin-top': '0px'});
        $('#timetableViewADiv').animate({'top': '20%'});
        $('#timetableViewBDiv').animate({'top': '100%'});
    });

    $('#timetableViewBButton').click(function() {
        $('.selector').animate({'margin-top': '81px'});
        $('#timetableViewADiv').animate({'top': '100%'});
        $('#timetableViewBDiv').animate({'top': '20%'});
    });

    $('.moduleButton').click(function() {
        currentLocation = $('.selectorWide').offset();
        targetLocation = $(this).offset();
        var topChange = targetLocation.top - currentLocation.top;
        var moveAmmount = topChange + $('.selectorWide').position().top;
        $('.selectorWide').animate({'top': moveAmmount});
    });

    $('.assignmentButton').click(function() {
        currentLocation = $('.selectorAssignment').offset();
        targetLocation = $(this).offset();
        var topChange = targetLocation.top - currentLocation.top;
        var moveAmmount = topChange + $('.selectorAssignment').position().top;
        $('.selectorAssignment').animate({'top': moveAmmount});
    });

    $('.messagesChangeConversation').click(function() {
        currentLocation = $('.selectorMessages').offset();
        targetLocation = $(this).offset();
        var topChange = targetLocation.top - currentLocation.top;
        var moveAmmount = topChange + $('.selectorMessages').position().top;
        $('.selectorMessages').animate({'top': moveAmmount});
    });

    $('#messagesNewConversation').click(function() {
        currentLocation = $('.selectorMessages').offset();
        targetLocation = $(this).offset();
        var topChange = targetLocation.top - currentLocation.top;
        var moveAmmount = topChange + $('.selectorMessages').position().top;
        $('.selectorMessages').animate({'top': moveAmmount});
    });
});