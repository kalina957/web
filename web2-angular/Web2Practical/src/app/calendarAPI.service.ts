import { Injectable } from '@angular/core';
import { HttpHeaders, HttpClient } from '@angular/common/http';
import { Observable, of } from 'rxjs';
import { Quote } from '@angular/compiler';
import { catchError } from 'rxjs/operators';
import { CalendarApi } from './calendar-api';

@Injectable({
  providedIn: 'root'
})
export class CalendarApiService {

  httpOptions = {
    headers: new HttpHeaders({'Content-Type':  'application/json' })
  };
  private calendarUrl ='https://getfestivo.com/v1/holidays?api_key=f737eab4-374b-44f1-9175-7c9c27fbcea5&country=NL&year=2019';
  
  constructor(private http: HttpClient) { }

  getCalendar(): Observable<any> {
    return this.http.get<any>(this.calendarUrl).pipe(
      catchError(this.handleError("getCalendar")));
  }
  
  private handleError<T> (operation = 'operation', result?: T){
    return (error: any): Observable<T> => {
      console.error(error);
      return of(result as T);
    };
  }
}
