import { Component, OnInit } from '@angular/core';
import { CalendarApiService } from '../calendarAPI.service';
import { CalendarApi } from '../calendar-api';
import { Holiday } from '../holiday';
import { CalendarService } from '../calendar/calendar.service';

@Component({
  selector: 'app-calendar-api',
  templateUrl: './calendar-api.component.html',
  styleUrls: ['./calendar-api.component.css']
})
export class CalendarApiComponent implements OnInit {

  calendar;
  holidays

  constructor(private calendarService: CalendarService) { }

  ngOnInit() {
    this.calendarService.getHolidays().subscribe(c => this.holidays = c.holidays.holidays);
    //this.holidays = this.calendar
  }

}
