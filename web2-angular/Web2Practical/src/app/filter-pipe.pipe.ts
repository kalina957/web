import { Pipe, PipeTransform } from '@angular/core';
import { Task } from "./task"
import { element } from 'protractor';

@Pipe({
  name: 'filterPipe'
})
export class FilterPipePipe implements PipeTransform {

  transform(items: any[], searchText: string): any[] {

    if (!items) {
      return [];
    }
    if (!searchText) {
      return items;
    }
    searchText = searchText.toLocaleLowerCase();

    return items.filter(it => {
      if (it.payload != null){
        return it.payload.doc.data().name.toLocaleLowerCase().includes(searchText);
      }
      return it.name.toLocaleLowerCase().includes(searchText);
    });
  }
}
