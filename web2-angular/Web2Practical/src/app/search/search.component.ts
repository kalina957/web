import { Component, OnInit } from '@angular/core';
import { TaskServiceService } from '../task-service.service';
import { Task } from '../task';

@Component({
  selector: 'app-search',
  templateUrl: './search.component.html',
  styleUrls: ['./search.component.css']
})
export class SearchComponent implements OnInit {

  searchName: string;
  tasks: Task[];

  constructor(private taskService: TaskServiceService) {
    this.taskService.getTasks().subscribe(task => this.tasks = task);

   }

  ngOnInit() {
  }

  test(searchName: string){    
    this.tasks.filter(task => task.name.toLowerCase().indexOf(this.searchName) > -1);
  }

}
