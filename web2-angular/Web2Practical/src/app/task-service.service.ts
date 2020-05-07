import { Injectable } from '@angular/core';
import { Task } from './task'
import { Observable, of, concat } from 'rxjs'
import { DepartmentService } from './departments/department.service'
import { Department } from './departments/department';
import { EmployeeService } from './employee.service'
import { asLiteral } from '@angular/compiler/src/render3/view/util';
import { HttpClient, HttpHeaders, HttpParams } from '@angular/common/http';
import { catchError, map, tap } from 'rxjs/operators';
import { Employee } from './employee'
import { Employee1 } from './employee1';
import { type } from 'os';
import { FirebaseFirestore, FirebaseDatabase, FirebaseApp } from '@angular/fire';
import { AngularFirestore } from '@angular/fire/firestore';
@Injectable({
  providedIn: 'root'
})
export class TaskServiceService {
  selectedTask: Task;
  public mocktasks: Task[] = [];
  checkEditTask: Task;
  httpOptions = {
    headers: new HttpHeaders({'Content-Type':  'application/json' })
  };
  private taskUrl ='http://i875395.hera.fhict.nl/api/3478777/task';
 

  constructor(private http: HttpClient, private employeeService: EmployeeService, public db: AngularFirestore) {
    /*this.mocktasks.push(new Task(1, "Do some cleaning", "Clean the garage and the toilets", new Date("2019-01-10")));
    this.mocktasks.push(new Task(2, "Make lunch", "Make a sandwich with cheese and ham", new Date("2019-01-11")));
    this.mocktasks.push(new Task(3, "Do homework", "Study angular components", new Date("2019-01-12")));
    this.mocktasks.push(new Task(4, "Eat lunch", "Eat sandwich with water", new Date("2019-01-13")));*/
    var employees;

   /* this.employeeService.getEmployees().subscribe(e => employees = e);
    for (let i = 0; i < 4; i++) {
      employees[i].addTask(this.mocktasks[i]);
    }*/
    
  }

  getTasks2(){
    return this.db.collection('tasks').snapshotChanges();
  }

  addTasks(tasks: Task[]): Observable<Task[]>{
    this.httpOptions = {
      headers: new HttpHeaders({'Content-Type':  'application/json' })
    };
    return this.http.post<Task[]>(this.taskUrl, tasks, this.httpOptions).pipe(catchError(this.handleError<Task[]>('addTasks')));
  }

  getTasks(): Observable<Task[]> {
    //return of(this.mocktasks);
    return this.http.get<Task[]>(this.taskUrl).pipe(
      catchError(this.handleError("getTasks", [])));
  }

  private handleError<T> (operation = 'operation', result?: T){
    return (error: any): Observable<T> => {
      console.error(error);
      return of(result as T);
    };
  }

  updateTask2(docId, value){
    //value.nameToSearch = value.name.toLowerCase();
    return this.db.collection('tasks').doc(docId).set(value);
  }

  getTaskById(id: number): Observable<Task>{
    const url = `${this.taskUrl}/${id}`;
    return this.http.get<Task>(url).pipe(
      tap(_ => console.log('task${id} has been fetched')),
      catchError(this.handleError<Task>("getTaskId"))
    );
  }

  addTask2(value){
    return this.db.collection('tasks').add(value)
  }

  setSelectedTask(selectedTask: Task) {
    this.selectedTask = selectedTask;
  }

  getSelectedTask() {
    return this.selectedTask;
  }

  deleteTask2(docId){
    return this.db.collection('tasks').doc(docId).delete();
  }

  addTask(newTask: Task): Observable<Task>{
    //this.mocktask = this.http.post<Task>(this.taskUrl, newTask, this.op)
    return this.http.post<Task>(this.taskUrl, newTask)
    .pipe(catchError(this.handleError<Task>('addTask')));

  }

  deleteTask (task: Task): Observable<void> {
    /*const id = typeof task === 'number' ? task : task.id;*/
    const url: string = `${this.taskUrl}/task?id=${task.id}`;
  
    /*return this.http.delete<Task>(url, this.httpOptions).pipe(
      catchError(this.handleError<Task>('deleteTask'))
    );*/

      //var param1 = new HttpParams().set('id',task.id.toString());
     return this.http.delete<void>(url, this.httpOptions).pipe(
      catchError(this.handleError<void>('deleteTask')));
  }
  updateTask(t: Task): Observable<any>{
    /*for (let task of this.mocktasks) {
      if (task == selectedTask) {
        task.name = name;
        task.description = description;
      }
    }*/
    const url: string = `${this.taskUrl}/task?id=${t.id}`
    return this.http.put(url, t, this.httpOptions)
    .pipe(catchError(this.handleError<any>("updateTask")));
  }

  setEditTask(task: Task) {
    this.checkEditTask = task;
  }

  getEditTask(): Observable<Task> {
    return of(this.checkEditTask);
  }
}
