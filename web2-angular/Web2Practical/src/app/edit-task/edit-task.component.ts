import { Component, OnInit, Input} from '@angular/core';
import { Task } from '../task'
import { FormControl, FormGroup } from '@angular/forms'
import { TaskServiceService } from '../task-service.service'
import { EventEmitterService } from '../event-emitter.service';

@Component({
  selector: 'app-edit-task',
  templateUrl: './edit-task.component.html',
  styleUrls: ['./edit-task.component.css']
})
export class EditTaskComponent implements OnInit {

  @Input() selectedTask1;
  formEdit: FormGroup;
  item;
  
  constructor(private taskServiceService : TaskServiceService, private eventService: EventEmitterService) { 
  }

  ngOnInit() {
    this.formEdit = new FormGroup({
      taskName: new FormControl(),
    });
   // this.selectedTask1 = this.taskServiceService.getEditTask();
    
  }

  public deleteSelectedTask(){
    this.item = this.selectedTask1.payload.doc.data();
    this.item.id = this.selectedTask1.payload.doc.id;
    this.taskServiceService.deleteTask2(this.item.id).then(res => {this.eventService.onDelete()});
    //this.taskServiceService.deleteTask(this.selectedTask1).subscribe(() => {this.eventService.onDelete(); this.eventService.onRefreshTaskList()});
    //this.selectedTask1 = null;
    //this.eventService.onDelete();
  }

  onUpdate(){
    this.item = this.selectedTask1.payload.doc.data();
    this.item.id = this.selectedTask1.payload.doc.id;
    /*this.task.name = this.formEdit.value.taskName;
    this.task.description = this.formEdit.value.taskDescription;*/
    var formControl = this.formEdit.value;
    this.item.name = formControl.taskName;
    //var t: Task = {"id":1478,"department_id":8090,"name":"Build task website","employees":[],"due_date":"2019-10-09"};
    //this.selectedTask1.description = formControl.taskDescription;
    this.taskServiceService.updateTask2(this.item.id, this.item).then(() => {this.eventService.onDelete();});
    this.selectedTask1 = null;
  }
}
