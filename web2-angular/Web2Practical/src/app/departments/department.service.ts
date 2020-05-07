import { Injectable, ɵConsole } from '@angular/core';
import { Department } from './department';
import { Employee } from '../employee';
import { Observable, of } from 'rxjs'
import { EmployeeService} from '../employee.service';
import {EXTERNALDEPARTMENTS} from './ext-departments/ext-departments.component'
import { HttpClient,HttpParams } from '@angular/common/http';

import { HttpHeaders,  } from '@angular/common/http';
import { catchError, map, tap } from 'rxjs/operators';

const httpOptions= {headers:new HttpHeaders({'Content-type':'application/json'})}


@Injectable({
  providedIn: 'root'
})
export class DepartmentService {
  employeesForDepartment=[];
  selectedDepartment: Department;
  sharedDepartment:Department;
  baseUrl = 'http://i875395.hera.fhict.nl/api/3478777/department';
  baseUrlEmployees ='http://i875395.hera.fhict.nl/api/3478777/employee';


  constructor(private employeeService: EmployeeService,private http:HttpClient) {
   }

  getDepartments(): Observable<Department[]> {
      return this.http.get<Department[]>(this.baseUrl).pipe(
        catchError(this.handleError<Department[]>('getDepartments', []))
      );
  }
  
  addNewDepartment(department:Department):Observable<Department>
  {
  //   var departments = []
  //   this.getDepartments().subscribe(dep=>departments=dep)
  //   this.addedInMissingIndex=false;
    
  //    for(let i=1;i<departments.length;i++)
  //   {
  //     if(departments[i-1].id!=i && this.addedInMissingIndex==false)
  //     {
  //       department.setID(i);
  //   departments.splice(i-1, 0,department);
  //      this.addedInMissingIndex=true;
  //    }
  //   }
  //   if(this.addedInMissingIndex ==false)
  //   {
  //     departments.push(department)
  //   }
  // return departments;

      return this.http.post<Department>(this.baseUrl,department).pipe(
        catchError(this.handleError<Department>('addDepartment')));

}
removeDeparment(department:Department):Observable<void>{  
 
    
     var param1 = new HttpParams().set('id',department.id.toString());
     department.name = "Unknown";
     department.id=0;
     department.employees=[];
     return this.http.delete<void>(this.baseUrl,{params:param1}).pipe(
      catchError(this.handleError<void>('deleteDepartment')));
  //return this.http.post<Employee>(this.baseUrlEmployees,new Employee(8090,"Denitsa","Pavlova","1999-06-04"))
}

updateDepartment(department:Department,depName:string):Observable<any>
{
  if(department!=null)
  {
   department.name = depName;
   return this.http.put(this.baseUrl + "?id=" + department.id,department, httpOptions).pipe(
   catchError(this.handleError<any>('updateDepartment')));
  }
  else
  {
  alert("Not selected department")
  }
}

  setSelectedDepartment(selectedDepartment: Department)
  {
    this.selectedDepartment = selectedDepartment;
  }
  
  getSelectedDepartment(dep:Department): Department
  {
    this.employeesForDepartment=[];
    this.getEmployeesByDepartment(dep.id).subscribe(em=>{this.employeesForDepartment=em});
    this.sharedDepartment=dep;
    return dep;
  }
  //////////////////////////////////////////////////////////////////////////////////// EMPLOYEES EMPLOYEES EMPLOYEES 

  getEmployees(): Observable<Employee[]> {
    return this.http.get<Employee[]>(this.baseUrlEmployees).pipe(
      catchError(this.handleError<Employee[]>('getEmployees', [])));
  }
  getEmployeesByDepartment(department_id): Observable<Employee[]> {
    return this.http.get<Employee[]>(this.baseUrlEmployees+ "?department_id=" + department_id).pipe(
      catchError(this.handleError<Employee[]>('getEmployees', [])));
  }


  private handleError<T> (operation = 'operation', result?: T) {
    
      return (error: any): Observable<T> => {
      console.error(error);
      alert(`${operation} failed: ${error.message}`)
      console.log(`${operation} failed: ${error.message}`);
      return of(result as T);
    };
  }

  getDepartmentById(id: number): Observable<Department>{
    return this.http.get<Department>(`${this.baseUrl}/department?id=${id}`).pipe(
      catchError(this.handleError<Department>('getDepartmentById'))
    );
  }


  

}