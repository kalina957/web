import { Injectable } from '@angular/core';
import { HttpHeaders, HttpClient } from '@angular/common/http';
import { Observable, of } from 'rxjs';
import { catchError } from 'rxjs/operators';
import { Quote } from './quote';

@Injectable({
  providedIn: 'root'
})
export class QuotesService {

  httpOptions = {
    headers: new HttpHeaders({'Content-Type':  'application/json' })
  };
  private quoteUrl ='https://programming-quotes-api.herokuapp.com/quotes';
  
  constructor(private http: HttpClient) { }

  getQuotes(): Observable<Quote[]> {
    return this.http.get<Quote[]>(this.quoteUrl).pipe(
      catchError(this.handleError("getQuotes", [])));
  }
  
  private handleError<T> (operation = 'operation', result?: T){
    return (error: any): Observable<T> => {
      console.error(error);
      return of(result as T);
    };
  }
}
