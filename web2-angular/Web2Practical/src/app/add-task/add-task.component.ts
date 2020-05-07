import { Component, OnInit, Input } from '@angular/core';
import { EmployeeService } from "../employee.service"
import { TaskServiceService } from '../task-service.service';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { Task } from '../task';
import { Employee1 } from '../employee1';
import { DateFormatPipe } from '../date-format.pipe';
import { Observable } from 'rxjs';
import { Department } from '../departments/department';
import { Employee } from '../employee';
import { DepartmentService } from '../departments/department.service';
import { EventEmitter } from 'events';
import { EventEmitterService } from '../event-emitter.service';
import { start } from 'repl';

@Component({
  selector: 'app-add-task',
  templateUrl: './add-task.component.html',
  styleUrls: ['./add-task.component.css']
})
export class AddTaskComponent implements OnInit {

  tasks: Task[] = [];
  addTaskForm : FormGroup;
  employees: Employee[] = [];
  assignEmployees: Employee[] = [];
  selectedDepartment: Department;
  departments: Department[];
  @Input() checkAddTask: boolean;
  @Input() model; 
  @Input() modelStartDate;

  constructor(public taskServiceService : TaskServiceService, public employeeService: EmployeeService, public departmentService: DepartmentService, private eventEmitterService: EventEmitterService) {}

  ngOnInit() {
    this.employeeService.getEmployees().subscribe(empl => this.employees = empl);
    this.departmentService.getDepartments().subscribe(department => this.departments = department);
    this.taskServiceService.getTasks().subscribe(task => this.tasks = task);
    //this.taskServiceService.getTasks().subscribe(task => this.tasks = task);
    this.addTaskForm = new FormGroup(
      {taskName: new FormControl('',Validators.minLength(4)),
       taskDue_date: new FormControl('', Validators.required),
       taskDepartment: new FormControl('', Validators.required),
       taskEmployee: new FormControl('', Validators.required),
       taskStart_date: new FormControl('', Validators.required)
      });
      //this.addTaskForm.setValue("taskDue_date",)
  }

  addTask(){
    
    var newdate: string;
    var startDate: string;
    if(this.modelStartDate.day<10)
    {
      if(this.modelStartDate.month<10)
      {
     startDate= this.modelStartDate.year + "-0" + this.modelStartDate.month + "-0" + this.modelStartDate.day;
      }
      else
      {
        startDate= this.modelStartDate.year + "-" + this.modelStartDate.month + "-0" + this.modelStartDate.day;

      }
    }
    else
    {
      if(this.modelStartDate.month<10)
      {
      startDate= this.modelStartDate.year + "-0" + this.modelStartDate.month + "-" + this.modelStartDate.day;
      }
      else
      {
        startDate= this.modelStartDate.year + "-" + this.modelStartDate.month + "-" + this.modelStartDate.day;

      }
    }



    if(this.model.day<10)
    {
      if(this.model.month<10)
      {
        newdate= this.model.year + "-0" + this.model.month + "-0" + this.model.day;
      }
      else
      {
        newdate= this.model.year + "-" + this.model.month + "-0" + this.model.day;

      }
    }
    else
    {
      if(this.model.month<10)
      {
        newdate= this.model.year + "-0" + this.model.month + "-" + this.model.day;
      }
      else
      {
        newdate= this.model.year + "-" + this.model.month + "-" + this.model.day;

      }
    }
    var name: string = this.addTaskForm.value.taskName; //+ "#" + startdate;
    var i: number;
    var empl: number[] = [1457, 1455, 1449];

    //this.tasks.push(new Task(1, "sdf", "sdf", "sdf"))
    //this.taskServiceService.addTask({"name": name, "department_id": this.selectedDepartment.id, "employees": empl, "due_date": newdate} as Task).subscribe(task => {this.tasks.push(task); this.eventEmitterService.onRefreshTaskList()});
    this.taskServiceService.addTask2({"name": name, "department_id": this.selectedDepartment.id, "employees": this.assignEmployees, "due_date": newdate,"start_date":startDate});
    //, task2 => newTask = task2
    /*for (let empl of this.assignEmployees){
      empl.addTask(newTask)
    }*/

    //this.taskCounter++;
    //this.checkAddTask = null;

    this.assignEmployees = [];
    this.checkAddTask = !this.checkAddTask;
    //this.eventEmitterService.onRefreshTaskList();
    //
    this.onReload();
}

onReload()
{
  window.location.reload();
}
onSelectDepartment(department: Department){
  this.selectedDepartment = department;
  this.addTaskForm.get('taskDepartment').setErrors(null)
}

onSelectEmployee(employee: Employee){
  if (this.assignEmployees.indexOf(employee) > -1){   
    for (let empl of this.assignEmployees){
      if (empl == employee){
        empl = null;
      }
    }
  }
  else{
    this.assignEmployees.push(employee);
  }
  this.addTaskForm.get('taskEmployee').setErrors(null)

}

close(){
  this.checkAddTask = false;
}

onSelectDate(){
 /* if (this.selectedDate1 != ""){
    this.model = this.selectedDate1;
    alert("test");
  }*/
}
get taskName() { return this.addTaskForm.get('taskName')};
get taskDescription() { return this.addTaskForm.get('taskDescription')};

}
