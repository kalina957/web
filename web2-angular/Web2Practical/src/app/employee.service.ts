import { Injectable } from '@angular/core';
import { Employee } from '../app/employee';
import { Employees } from '../app/mock-employees';
import { Observable, of } from 'rxjs';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { catchError, map, tap } from 'rxjs/operators';
import { DepFlags } from '@angular/compiler/src/core';
import { Department } from './departments/department';
import { Task } from './task'

@Injectable({
  providedIn: 'root'
})
export class EmployeeService {
 
  httpOptions = {
    headers: new HttpHeaders({'Content-Type':  'application/json' })
  };
  private employeeURL ='http://i875395.hera.fhict.nl/api/3478777/employee';
  private departmentURL ='http://i875395.hera.fhict.nl/api/3478777/department';
  private taskUrl ='http://i875395.hera.fhict.nl/api/3478777/task';
 
  constructor(private http: HttpClient) { }
  // getEmployees(): Observable<Employee[]>{
  //   return of(Employees);

  // }

  public getEmployees(): Observable<Employee[]>{
    return this.http.get<Employee[]>(this.employeeURL).pipe(
      catchError(this.handleError("getEmployees",[]))
    );
  }

  public getDepartments(): Observable<Department[]>{
    return this.http.get<Department[]>(this.departmentURL).pipe(
      catchError(this.handleError("getDepartments",[]))
    );
  }

  public getEmployeeById(id:number):Observable<Employee>{
    const url = `${this.employeeURL}/${id}`;
    return this.http.get<Employee>(url).pipe(
      tap(_ => console.log('employee${id} has been fetched')),
      catchError(this.handleError<Employee>("getEmployeeId"))
    );
  }
  public deleteEmployee(employee: Employee): Observable<void>{
    const url: string = `${this.employeeURL}/task?id=${employee.id}`;
  
     return this.http.delete<void>(url, this.httpOptions).pipe(
      catchError(this.handleError<void>('deleteEmployee')));
  }

  private handleError<T> (operation = 'operation', result?: T){
    return (error: any): Observable<T> => {
      console.error(error);
      return of(result as T);
    };
  }
  public addEmployee(newEmployee: Employee): Observable<Employee>{
    return this.http.post<Employee>(this.employeeURL, newEmployee, this.httpOptions)
    .pipe(catchError(this.handleError<Employee>('addEmployee')));

  }
  getTasks(): Observable<Task[]> {
    return this.http.get<Task[]>(this.taskUrl).pipe(
      catchError(this.handleError("getTasks", [])));
  }

}
