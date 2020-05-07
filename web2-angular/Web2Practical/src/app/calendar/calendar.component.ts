import { Component, OnInit } from '@angular/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import { CalendarService } from './calendar.service';
import {taskCalendar} from './taskCalendar';
import { Task } from '../task';
import { getLocaleDateFormat, getLocaleDayPeriods } from '@angular/common';
import { __assign } from 'tslib';
import { CalendarApi } from '../calendar-api';
import { TaskServiceService } from '../task-service.service';
import { DepartmentService } from '../departments/department.service';

@Component({
  selector: 'app-calendar',
  templateUrl: './calendar.component.html',
  styleUrls: ['./calendar.component.css']
})
export class CalendarComponent implements OnInit {

  calendarPlugins=[interactionPlugin  ,dayGridPlugin]//does not exist. Make sure your plugins are loaded correctly.
  calendarEvents:taskCalendar[]= [];
  private tasks;
  holidays;
  task;
  checkTask: boolean;
  selectedDate;
  taskDepartment;

  constructor(private svc:CalendarService, private taskService: TaskServiceService, private departmentService: DepartmentService) { 
  }

  ngOnInit() {
    this.svc.getHolidays().subscribe(c => {this.holidays = c.holidays.holidays; this.taskService.getTasks2().subscribe(t =>{this.tasks= t;this.calendarEvents=[];this.getData()})});
    
  }
  
  getData()
  {
    this.svc.assignData(this.tasks, this.holidays);
    this.calendarEvents=this.svc.dates;
    console.log(this.calendarEvents);
  }
  handleDateClick(arg) 
    { // handler method
    // console.log(arg.event.title);
    for(let t of this.tasks)
    {
      var task = t.payload.doc.data();
      if(task.name==arg.event.title)
      {
        this.departmentService.getDepartmentById(task.department_id).subscribe(deparment => this.taskDepartment = deparment);
         this.task = t;
         console.log(task);
      }
    }
    }

    addTask(arg){
      this.checkTask = true;
      var d  = new Date(arg.dateStr);
      this.selectedDate = { year: d.getFullYear(), month: d.getMonth() + 1, day: d.getDate()} ;
    }
  }
