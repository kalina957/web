import { Component, OnInit, Input } from '@angular/core';
import { Task } from '../task';
import { FormControl, FormGroup, Validators } from '@angular/forms'
import { Employee } from '../employee';
import { TaskServiceService } from '../task-service.service';
import { Department } from '../departments/department';

@Component({
  selector: 'app-details-task',
  templateUrl: './details-task.component.html',
  styleUrls: ['./details-task.component.css']
})
export class DetailsTaskComponent implements OnInit {
  
  @Input() task: Task;
  employees: Employee[] = [];
  @Input() selectedEmployees: Employee[];
  checkEditTask;
  @Input() department: Department;
  @Input() taskId: String;


  constructor(public taskServiceService : TaskServiceService) {
   }

  ngOnInit() {
  
  }
  editTask(){
    this.taskServiceService.setEditTask(this.task);
  }

  close(){
    this.task = null;
  }
  }

