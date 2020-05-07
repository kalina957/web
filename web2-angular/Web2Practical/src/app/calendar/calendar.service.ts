import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable, of } from 'rxjs';
import {TaskServiceService} from '../task-service.service'
import { Task } from '../task';
import{taskCalendar} from './taskCalendar'
import { catchError, map, tap } from 'rxjs/operators';
import { TouchSequence } from 'selenium-webdriver';
import { emitKeypressEvents } from 'readline';
@Injectable({
  providedIn: 'root'
})
export class CalendarService {
 
   dates:taskCalendar[]=[];
  private tasks: Task[]=[];
  baseUrl = 'http://i875395.hera.fhict.nl/api/3478777/task';
  calendarUrl ='https://getfestivo.com/v1/holidays?api_key=2bd9fc23-34a8-44de-86ae-0247d86745b1&country=NL&year=2019';
  constructor(private s:TaskServiceService,private http:HttpClient,) 
  { 
  
  }
   getData():Observable<Task[]>{    

    return this.http.get<Task[]>(this.baseUrl).pipe(
      tap(_ => console.log('task${id} has been fetched')),
      catchError(this.handleError<Task[]>("getTasks"))
    );
       
     
   }
   assignData(tasks:any[], holidays: any)
   {
     this.dates=[];
     for(let h of holidays){
       this.dates.push(new taskCalendar(h.start, h.end, h.name));
     }
    for(let t of tasks)
   {
    let task = t.payload.doc.data();
    let date = new Date(task.due_date);
    let start_date = new Date(task.start_date);
    this.dates.push(new taskCalendar(task.start_date,task.due_date,task.name));


  //   if(value>10)
  //   {
  //     let start = value-10;
  //     // alert(start);
  //     if(start>10)
  //     {
  //       if(valueMonth<10)
  //       {
  //        this.dates.push(new taskCalendar("2019-0"+valueMonth+"-"+start,task.due_date,task.name));
  //       }
  //       else
  //       {
  //         this.dates.push(new taskCalendar("2019-"+valueMonth+"-"+start,task.due_date,task.name));
  //       }
  //     }
  //      if(start<10)
  //     {
  //       if(valueMonth>=10)
  //       {
  //        this.dates.push(new taskCalendar("2019-"+valueMonth+"-0"+start,task.due_date,task.name));
  //       }
  //       else
  //       {
  //         this.dates.push(new taskCalendar("2019-0"+valueMonth+"-0"+start,task.due_date,task.name));
  //       }
  //     }
      
  //   }
  //   else
  //   {
  //       valueMonth=valueMonth-1;
  //       let start = value-10;
  //       start = this.getDaysInMonth(valueMonth,2019) +start;
  //       // alert(start);
  //     if(start>10)
  //     {
  //       if(valueMonth<10)
  //       {
  //        this.dates.push(new taskCalendar("2019-0"+valueMonth+"-"+start,task.due_date,task.name));
  //       }
  //       else
  //       {
  //         this.dates.push(new taskCalendar("2019-"+valueMonth+"-"+start,task.due_date,task.name));
  //       }
  //     }
  //      if(start<10)
  //     {
  //       if(valueMonth>=10)
  //       {
  //        this.dates.push(new taskCalendar("2019-"+valueMonth+"-0"+start,task.due_date,task.name));
  //       }
  //       else
  //       {
  //         this.dates.push(new taskCalendar("2019-0"+valueMonth+"-0"+start,task.due_date,task.name));
  //       }
  //     }
      
  //   }

  //  }  
  //  }

   }
  }
   private getDaysInMonth(month,year) {            
   return new Date(year, month, 0).getDate();
  };

  private handleError<T> (operation = 'operation', result?: T) {
    
    return (error: any): Observable<T> => {
    console.error(error);
    alert(`${operation} failed: ${error.message}`)
    console.log(`${operation} failed: ${error.message}`);
    return of(result as T);
    }
  }

  getHolidays(): Observable<any> {
    return this.http.get<any>(this.calendarUrl).pipe(
      catchError(this.handleError("getHolidays")));
  }
  }
