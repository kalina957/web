import { Injectable, EventEmitter } from '@angular/core';
import { Task } from './task';
import { Subscription } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class EventEmitterService {

  invokeTaskList = new EventEmitter();
  invokeDelete = new EventEmitter();
  subsVar: Subscription;
  subsDeleteVar: Subscription;

  constructor() { }

  onRefreshTaskList() {
    this.invokeTaskList.emit();
  }

  onDelete() {
    this.invokeDelete.emit();
  }
}
