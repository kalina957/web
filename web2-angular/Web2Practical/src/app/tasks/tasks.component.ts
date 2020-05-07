import { Component, OnInit, Input } from '@angular/core';
import { Task } from '../task';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { TaskServiceService } from '../task-service.service';
import { Employee } from '../employee';
import { EmployeeService } from "../employee.service"
import { Logger } from 'ag-grid-community';
import { EventEmitter } from 'events';
import { EventEmitterService } from '../event-emitter.service';
import { DepartmentService } from '../departments/department.service';
import { Department } from '../departments/department';

@Component({
  selector: 'app-tasks',
  templateUrl: './tasks.component.html',
  styleUrls: ['./tasks.component.css']
})

export class TasksComponent implements OnInit {

  tasks: any[] = [];
  selectedTask: Task;
  employees: Employee[] = [];
  selectedEmployees: Employee[] = [];
  assignEmployees: Employee[] = [];
  checkTask: boolean = false;
  checkEditTask: Task;
  taskDepartment: Department;

  constructor(public taskServiceService: TaskServiceService, private employeeService: EmployeeService, private eventEmitterService: EventEmitterService, private departmentService: DepartmentService) {

  }

  ngOnInit() {

    this.employeeService.getEmployees().subscribe(empl => this.employees = empl);
    // this.taskServiceService.getTasks().subscribe(task => {this.tasks = task as Task[];});
    this.getData();
    this.taskServiceService.getEditTask().subscribe(editTask => this.checkEditTask = editTask);

    if (this.eventEmitterService.subsVar == undefined) {
      this.eventEmitterService.subsVar = this.eventEmitterService.invokeTaskList.subscribe(() => { this.onRefreshTaskList() });
      this.eventEmitterService.subsDeleteVar = this.eventEmitterService.invokeDelete.subscribe(() => this.onDelete());
    };
  }

  getData() {
    this.taskServiceService.getTasks2()
      .subscribe(result => {
        this.tasks = result;
      })
  }

  setSelectedTask(selectedTask: any) {
    /*this.selectedEmployees = [];
      for (let employee of this.employees){
      for (let task of employee.getTasks()){
        if (task == selectedTask){
          this.selectedEmployees.push(employee);
        }
      }}*/
    this.departmentService.getDepartmentById(selectedTask.payload.doc.data().department_id).subscribe(deparment => this.taskDepartment = deparment);
    this.selectedTask = selectedTask;
    this.departmentService.sharedDepartment = null;
  }

  getSelectedDep(): Department {
    return this.departmentService.sharedDepartment;
  }

  onSelectEmployee(employee: Employee) {
    if (this.assignEmployees.indexOf(employee) > -1) {
      for (let empl of this.assignEmployees) {
        if (empl == employee) {
          empl = null;
        }
      }
    }
    else {
      this.assignEmployees.push(employee);
    }
  }

  addTask() {
    //this.taskServiceService.addTasks(mocktasks);
    this.checkTask = !this.checkTask;

  }

  editTask() {
    this.checkEditTask = this.selectedTask;
  }

  close() {
    this.selectedTask = null;
    this.checkEditTask = null;
  }

  onRefreshTaskList() {
    this.tasks = [];
    // this.taskServiceService.getTasks().subscribe(task => this.tasks = task);
  }

  onDelete() {
    this.selectedTask = null;
    this.checkEditTask = null;
  }

  SortByName() {
    this.taskServiceService.getTasks2().subscribe(dep=>{this.tasks=dep;dep.sort((a,b) =>(a.payload.doc.data() as Task).name.localeCompare((b.payload.doc.data() as Task).name))});
  }

}
