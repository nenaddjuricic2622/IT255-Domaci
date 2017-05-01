import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'SearchsobakvadratPipe'
})

export class SearchsobakvadratPipe {

    transform(value: Object[], anotherValue: string): Object[] {
      if (value == null) {
        return null;
      }

      if (anotherValue !== undefined) {
        return value.filter((item: Object) =>
        item["kvadrata"].toLowerCase().indexOf(anotherValue.toLowerCase()) !== -1);
      } else {
        return value;
      }
    }
}
