/**
 * Created by Anas on 11/22/2016.
 */
if(typeof $.Calendario !== typeof undefined)
    $.Calendario.defaults = {
        /*
         you can also pass:
         month : initialize calendar with this month (1-12). Default is today.
         year : initialize calendar with this year. Default is today.
         caldata : initial data/content for the calendar.
         caldata format:
         {
         'MM-DD-YYYY' : 'HTML Content',
         'MM-DD-YYYY' : 'HTML Content',
         'MM-DD-YYYY' : 'HTML Content'
         ...
         }
         */
        weeks: ['الاحد', 'الإثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
        weekabbrs: ['الاحد', 'الإثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'],
        months: ['كانون الثاني', 'شباط', 'آذار', 'نيسان', 'أيار', 'حزيران', 'تموز', 'آب', 'أيلول', 'تشرين الأول', 'تشرين الثاني', 'كانون الأول'],
        monthabbrs: ['كانون الثاني', 'شباط', 'آذار', 'نيسان', 'أيار', 'حزيران', 'تموز', 'آب', 'أيلول', 'تشرين الأول', 'تشرين الثاني', 'كانون الأول'],
        // choose between values in options.weeks or options.weekabbrs
        displayWeekAbbr: false,
        // choose between values in options.months or options.monthabbrs
        displayMonthAbbr: false,
        // left most day in the calendar
        // 0 - Sunday, 1 - Monday, ... , 6 - Saturday
        startIn: 6,
        onDayClick: function ($el, $content, dateProperties) {
            return false;
        }
    };